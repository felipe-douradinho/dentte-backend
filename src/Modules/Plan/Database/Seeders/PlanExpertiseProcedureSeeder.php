<?php

namespace Modules\Plan\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Modules\Base\Entities\Plan as PlanBase;

use Modules\Plan\Entities\Plan;
use Modules\Plan\Entities\PlanExpertise;
use Modules\Plan\Entities\PlanExpertiseProcedure;
use Modules\Plan\Entities\ProcedureTussPivot;
use Modules\Plan\Entities\Tuss;

class PlanExpertiseProcedureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (PlanBase::all() as $plan_base)
        {
            $created_plan = Plan::create([
                'name'                      => $plan_base->name,
                'is_default'                => $plan_base->is_default,
                'paid_by_the_agreement'     => $plan_base->paid_by_the_agreement,
            ]);

            foreach ($plan_base->expertises as $expertises_base)
            {
                $created_expertise = PlanExpertise::create([
                    'plan_id'       => $created_plan->id,
                    'name'          => $expertises_base->name,
                    'is_enabled'    => $expertises_base->is_enabled,
                ]);

                foreach ($expertises_base->procedures as $procedure_base)
                {
                    $created_procedure = PlanExpertiseProcedure::create([
                        'plan_expertise_id' => $created_expertise->id,

                        'name'              => $procedure_base->name,
                        'price'             => $procedure_base->price,
                        'cost'              => $procedure_base->cost,
                        'faces_enabled'     => $procedure_base->faces_enabled,
                        'is_enabled'        => $procedure_base->is_enabled,
                    ]);

                    foreach ($procedure_base->tusses as $tuss_base)
                    {
                        $tuss_data = [
                            'name' => $tuss_base->name, 'code' => $tuss_base->code,
                        ];

                        $tuss_created = Tuss::firstOrCreate( $tuss_data, $tuss_data );

                        ProcedureTussPivot::create([
                            'plan_expertise_procedure_id'   => $created_procedure->id,
                            'tuss_id'                       => $tuss_created->id,
                        ]);
                    }
                }
            }
        }

    }
}
