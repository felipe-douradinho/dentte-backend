<?php

namespace Modules\Patient\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Base\Entities\Plan;
use Modules\Patient\Entities\Patient;
use Modules\Patient\Entities\PatientPlan;

class PatientPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Patient::get() as $patient)
        {
            PatientPlan::factory()
                ->create([
                    'patient_id'    => $patient->id,
                    'plan_id'       => Plan::inRandomOrder()->first()->id,
                ]);
        }
    }
}
