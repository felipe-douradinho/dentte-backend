<?php

namespace Modules\Company\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Company\Entities\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::factory()->create([
            'name' => 'Clínica do Felipe',
        ]);

        Company::factory()
            ->count(5)
            //->hasPosts(1)
            ->create();
    }
}
