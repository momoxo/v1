<?php

namespace Momoxo\Installer\Requirement;

use Exception;
use Momoxo\Installer\Database\ConnectionFactory;
use Momoxo\Installer\ValueObject\Database;

/**
 * データベース接続可能要件
 */
class DatabaseConnectableRequirement
{
    /**
     * @var ConnectionFactory
     */
    private $connectionFactory;

    /**
     * @param  ConnectionFactory              $connectionFactory
     * @return DatabaseConnectableRequirement
     */
    public function setConnectionFactory(ConnectionFactory $connectionFactory)
    {
        $this->connectionFactory = $connectionFactory;

        return $this;
    }

    /**
     * Determine if the database satisfies this requirement
     * @param  Database $database
     * @return bool
     */
    public function isSatisfiedBy(Database $database)
    {
        try {
            $this->connectionFactory->create($database->getHost(), $database->getUser(), $database->getPassword());
        } catch ( Exception $e ) {
            return false;
        }

        return true;
    }
}
