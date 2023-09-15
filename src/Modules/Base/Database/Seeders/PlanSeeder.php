<?php

namespace Modules\Base\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Base\Entities\Plan;
use Modules\Core\Enums\YesNoEnum;


class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plan::create([
            'name'                  => 'Particular',
            'is_default'            => YesNoEnum::YES->value,
        ]);
    }
}
