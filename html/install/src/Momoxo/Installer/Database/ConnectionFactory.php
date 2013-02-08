<?php

namespace Momoxo\Installer\Database;

use PDO;
use Momoxo\Installer\ValueObject\Database;

class ConnectionFactory
{
    /**
     * Create new PDO instance
     * @param  string $host
     * @param  string $username
     * @param  string $password
     * @return PDO
     */
    public function create($host, $username, $password)
    {
        $dsn = sprintf('mysql:host=%s;charset=utf8', $host);

        return new PDO($dsn, $username, $password, $this->getOptions());
    }

    /**
     * Create new PDO instance with database name
     * @param  string $host
     * @param  string $username
     * @param  string $password
     * @param  string $databaseName
     * @return PDO
     */
    public function createWithDatabaseName($host, $username, $password, $databaseName)
    {
        $dsn = sprintf('mysql:dbname=%s;host=%s;charset=utf8', $databaseName, $host);

        return new PDO($dsn, $username, $password, $this->getOptions());
    }

    /**
     * Create new PDO instance with Database object
     * @param  Database $database
     * @return PDO
     */
    public function createWithDatabase(Database $database)
    {
        return $this->createWithDatabaseName(
            $database->getHost(),
            $database->getUser(),
            $database->getPassword(),
            $database->getName()
        );
    }

    /**
     * @return array
     */
    private function getOptions()
    {
        return array(
            PDO::ATTR_ORACLE_NULLS       => PDO::NULL_NATURAL,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_AUTOCOMMIT         => true,
            PDO::ATTR_EMULATE_PREPARES   => false,
        );
    }
}
