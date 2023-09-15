<?php

namespace Modules\Base\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Base\Entities\Plan;
use Modules\Base\Entities\PlanExpertise;

class PlanExpertiseSeeder extends Seeder
{
    public array $expertises = [
        'Cirurgia',
        'Dentística',
        'Endodontia',
        'Harmonização facial',
        'Implantodontia',
        'Ortodontia',
        'Outros',
        'Periodontia',
        'Prevenção',
        'Prótese',
        'Radiologia',
        'Testes e exames laboratoriais',
        'Urgência',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->expertises as $expertise)
        {
            PlanExpertise::create([
                'plan_id'   => Plan::first()->id,
                'name'      => $expertise,
            ]);
        }
    }
}
