<?php

namespace Momoxo\Installer\Service;

use Momoxo\Installer\Requirement\DatabaseConnectableRequirement;
use Momoxo\Installer\ValueObject\Database;

/**
 * Database connection test
 */
class DatabaseConnectionTestService
{
    /**
     * @var DatabaseConnectableRequirement
     */
    private $databaseConnectableRequirement;

    /**
     * @param  DatabaseConnectableRequirement $databaseConnectableRequirement
     * @return DatabaseConnectionTestService
     */
    public function setDatabaseConnectableRequirement(DatabaseConnectableRequirement $databaseConnectableRequirement)
    {
        $this->databaseConnectableRequirement = $databaseConnectableRequirement;

        return $this;
    }

    /**
     * Test if the database can be connected
     * @param  Database $database
     * @return bool
     */
    public function test(Database $database)
    {
        return $this->databaseConnectableRequirement->isSatisfiedBy($database);
    }
}
