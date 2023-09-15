<?php

namespace Modules\Tenancy\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Tenancy\Entities\Tenant;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tenants = [
            [
                'name'      => 'Douradinho`s Dentista',
                'cnpj'      => '12345678901234',
                'domain'    => 'local.api.12345678901234.dentte.com.br'
            ]
        ];

        foreach ($tenants as $tenant)
        {
            if( !Tenant::where('id', $tenant["cnpj"])->first() )
            {
                $_tenant = Tenant::create([
                    'id'    => $tenant["cnpj"],
                    'name'  => $tenant["name"],
                ]);

                $_tenant->domains()->create([
                    'domain' => $tenant["domain"],
                    'tenant_id' => $_tenant->id
                ]);
            }
        }

    }
}
