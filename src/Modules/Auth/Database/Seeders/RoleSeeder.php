<?php

namespace Modules\Auth\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Auth\Entities\Role;
use Modules\Auth\Services\PermissionService;
use Modules\Auth\Services\RoleProfileService;

class RoleSeeder extends Seeder
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

        foreach (RoleProfileService::$roles as $role_name => $role_data)
        {
            // -- create role
            $role = Role::create([
                'name'             => $role_data['name'],
                'display_name'     => $role_data['display_name'],
                'description'      => $role_data['description'],
                'guard_name'       => $role_data['guard_name'],
            ]);

            // -- reset permissions
            $permissions = array_merge(
            //PermissionService::getPermissionsByRole( $role->getOriginal('name') ), // for admin. prefix
                PermissionService::getPermissionsByRole( $role->getOriginal('name'), true ) // for api.prefix
            );

            $role->givePermissionTo( $permissions );
        }
    }
}
