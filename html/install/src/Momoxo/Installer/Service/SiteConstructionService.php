<?php

namespace Momoxo\Installer\Service;

use Momoxo\Installer\ValueObject\Site;
use Momoxo\Installer\ConfigFormatter\FormatterInterface;
use Momoxo\Installer\Service\ServiceException;
use Momoxo\Installer\Database\ConnectionFactory;
use Momoxo\Installer\Database\SqlUtility;
use Momoxo\Installer\Security\PasswordEncryptorInterface;

/**
 * Site construction service
 */
class SiteConstructionService
{
    /**
     * @var string
     */
    private $configFilename;

    /**
     * @var FormatterInterface
     */
    private $formatter;

    /**
     * @var ConnectionFactory
     */
    private $connectionFactory;

    /**
     * @var SqlUtility
     */
    private $sqlUtility;

    /**
     * @var PasswordEncryptorInterface
     */
    private $encryptor;

    /**
     * @var string
     */
    private $schemaFile;

    /**
     * @var string
     */
    private $dataFile;

    /**
     * @param  string                  $configFilename
     * @return SiteConstructionService
     */
    public function setConfigFilename($configFilename)
    {
        $this->configFilename = $configFilename;

        return $this;
    }

    /**
     * @param  FormatterInterface      $formatter
     * @return SiteConstructionService
     */
    public function setFormatter(FormatterInterface $formatter)
    {
        $this->formatter = $formatter;

        return $this;
    }

    /**
     * @param  ConnectionFactory       $connectionFactory
     * @return SiteConstructionService
     */
    public function setConnectionFactory(ConnectionFactory $connectionFactory)
    {
        $this->connectionFactory = $connectionFactory;

        return $this;
    }

    /**
     * @param  SqlUtility              $sqlUtility
     * @return SiteConstructionService
     */
    public function setSqlUtility(SqlUtility $sqlUtility)
    {
        $this->sqlUtility = $sqlUtility;

        return $this;
    }

    /**
     * @param  PasswordEncryptorInterface $encryptor
     * @return SiteConstructionService
     */
    public function setEncryptor(PasswordEncryptorInterface $encryptor)
    {
        $this->encryptor = $encryptor;

        return $this;
    }

    /**
     * @param  string                  $schemaFile
     * @return SiteConstructionService
     */
    public function setSchemaFile($schemaFile)
    {
        $this->schemaFile = $schemaFile;

        return $this;
    }

    /**
     * @param  string                  $dataFile
     * @return SiteConstructionService
     */
    public function setDataFile($dataFile)
    {
        $this->dataFile = $dataFile;

        return $this;
    }

    /**
     * Construct site
     * @param  Site             $site
     * @throws \Exception
     * @throws ServiceException
     */
    public function construct(Site $site)
    {
        $state = array(
            'configFileCreated' => false,
            'createdTables'  => array(),
        );

        try {
            $this->createConfigFile($site);
            $state['configFileCreated'] = true;
            $connection = $this->connectionFactory->createWithDatabase($site->getDB());
            $state['createdTables'] = $this->constructSchema($connection, $site);
            $this->constructData($connection, $site);
            $this->createAdminAccount($connection, $site);
        } catch ( \Exception $e ) {
            if ($state['configFileCreated']) {
                unlink($this->configFilename);
            }

            if (isset($connection) and $connection instanceof \PDO) {
                $this->dropTables($state['createdTables'], $connection);
            }

            throw $e;
        }
    }

    /**
     * @param  Site             $site
     * @throws ServiceException
     */
    private function createConfigFile(Site $site)
    {
        $configFileContents = $this->formatter->format($site);

        if (@file_put_contents($this->configFilename, $configFileContents) === false) {
            throw ServiceException::failedToCreateConfigFile($this->configFilename);
        }
    }

    /**
     * @param  \PDO     $connection
     * @param  Site     $site
     * @return string[]
     */
    private function constructSchema(\PDO $connection, Site $site)
    {
        $createdTables = array();
        $queries = $this->splitQueries(file_get_contents($this->schemaFile));
        $prefix = $site->getDB()->getPrefix();

        foreach ($queries as $query) {
            $queryInfo = $this->sqlUtility->prefixQuery($query, $prefix);
            $connection->query($queryInfo[0]);
            $createdTables[] = $prefix.'_'.$queryInfo[4];
        }

        return $createdTables;
    }

    /**
     * @param \PDO $connection
     * @param Site $site
     */
    private function constructData(\PDO $connection, Site $site)
    {
        $queries = $this->splitQueries(file_get_contents($this->dataFile));

        $admin = $site->getAdmin();

        foreach ($queries as $query) {
            $query = str_replace('@@ADMINMAIL@@', $admin->getEmail(), $query);

            $queryInfo = $this->sqlUtility->prefixQuery($query, $site->getDB()->getPrefix());
            $connection->query($queryInfo[0]);
        }
    }

    /**
     * @param \PDO $connection
     * @param Site $site
     */
    private function createAdminAccount(\PDO $connection, Site $site)
    {
        // TODO >> どのカラムがどの値か一目瞭然にする
        $statement = $connection->prepare("
            INSERT INTO ".$site->getDB()->getPrefix()."_users (
                uid, name, uname, email, url, user_avatar, user_regdate, user_icq,
                user_from, user_sig, user_viewemail, actkey, user_aim, user_yim,
                user_msnm, pass, posts, attachsig, rank, level, theme, timezone_offset,
                last_login, umode, uorder, notify_method, notify_mode, user_occ, bio,
                user_intrest, user_mailok)
            VALUES (
                1, '', :uname, :email, :url, 'blank.gif', :user_regdate, '', '', '', 1,
                '', '', '', '', :pass, 0, 0, 7, 5, '', :timezone_offset, :last_login,
                'thread', 0, 1, 0, '', '', '', 0);
        ");

        $admin = $site->getAdmin();

        $statement->execute(array(
            ':uname'           => $admin->getUsername(),
            ':email'           => $admin->getEmail(),
            ':url'             => $admin->getUrl(),
            ':user_regdate'    => $admin->getRegisteredDate(),
            ':pass'            => $this->encryptor->encrypt($admin->getPassword()),
            ':timezone_offset' => $admin->getTimezoneOffset(),
            ':last_login'      => $admin->getLastLogin(),
        ));
    }

    private function dropTables(array $tables, \PDO $connection)
    {
        if (count($tables) > 0) {
            foreach ($tables as $table) {
                $connection->query(sprintf("DROP TABLE %s", $table));
            }
        }
    }

    /**
     * @param  string   $sql
     * @return string[]
     */
    private function splitQueries($sql)
    {
        $queries = array();
        $this->sqlUtility->splitMySqlFile($queries, $sql);

        return $queries;
    }
}
