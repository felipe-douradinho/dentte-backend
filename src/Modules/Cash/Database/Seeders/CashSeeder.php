<?php

namespace Modules\Cash\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Cash\Entities\Cash;

class CashSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cash::create([
            'name'          => 'Clínica',
            'is_default'    => \Modules\Core\Enums\YesNoEnum::YES->value,
            'is_enabled'    => \Modules\Core\Enums\YesNoEnum::YES->value,
        ]);

        Cash::create([
            'name'          => 'Conta do banco',
            'is_default'    => \Modules\Core\Enums\YesNoEnum::NO->value,
            'is_enabled'    => \Modules\Core\Enums\YesNoEnum::YES->value,
        ]);
    }
}
