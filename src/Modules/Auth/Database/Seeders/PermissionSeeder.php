<?php

namespace Modules\Auth\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Auth\Entities\Permission;
use Modules\Auth\Enums\GuardEnum;
use Modules\Auth\Services\PermissionService;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        foreach (GuardEnum::$GUARDS as $guard)
        {
            // -- as admin has all api system permissions, then, create all of them
            foreach (PermissionService::getAllPermissions(true) as $permission)
            {
                // -- permission
                Permission::create([
                    'name'          => $permission,
                    'guard_name'    => $guard,
                ]);
            }
        }
    }
}
