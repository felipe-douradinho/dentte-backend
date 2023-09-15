<?php

declare(strict_types=1);

namespace Modules\Tenancy\Jobs;

use Stancl\Tenancy\Database\DatabaseManager;
use Stancl\Tenancy\Events\CreatingDatabase;
use Stancl\Tenancy\Events\DatabaseCreated;
use Stancl\Tenancy\Jobs\CreateDatabase as BaseCreateDatabase;

class CreateDatabase extends BaseCreateDatabase
{
    public function handle(DatabaseManager $databaseManager)
    {
        event(new CreatingDatabase($this->tenant));

        // Terminate execution of this job & other jobs in the pipeline
        if ($this->tenant->getInternal('create_database') === false) {
            return false;
        }

        $this->tenant->database()->makeCredentials();
        //$databaseManager->ensureTenantCanBeCreated($this->tenant);
        $this->tenant->database()->manager()->createDatabase($this->tenant);

        event(new DatabaseCreated($this->tenant));
    }
}
