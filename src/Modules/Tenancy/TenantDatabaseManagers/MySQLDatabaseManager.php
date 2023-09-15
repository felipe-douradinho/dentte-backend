<?php

declare(strict_types=1);

namespace Modules\Tenancy\TenantDatabaseManagers;

use Stancl\Tenancy\Contracts\TenantWithDatabase;
use Stancl\Tenancy\TenantDatabaseManagers\MySQLDatabaseManager as BaseMySQLDatabaseManager;

class MySQLDatabaseManager extends BaseMySQLDatabaseManager
{
    public function createDatabase(TenantWithDatabase $tenant): bool
    {
        $database = $tenant->database()->getName();
        $charset = $this->database()->getConfig('charset');
        $collation = $this->database()->getConfig('collation');

        return $this->database()->statement(
            "CREATE DATABASE IF NOT EXISTS `{$database}` CHARACTER SET `$charset` COLLATE `$collation`"
        );
    }
}
