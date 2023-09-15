<?php

namespace Modules\Base\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Modules\Base\Entities\PlanExpertise;
use Modules\Base\Entities\PlanExpertiseProcedure;
use Modules\Base\Entities\ProcedureTussPivot;
use Modules\Base\Entities\Tuss;
use Modules\Core\Enums\YesNoEnum;

class PlanExpertiseProcedureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = base_path('Modules/Base/Resources/procedures/');

        foreach (PlanExpertise::all() as $expertise)
        {
            $expertise_slug = Str::slug($expertise->name);
            $procedure_json = File::get($path . $expertise_slug . '.json');

            $procedure_data = json_decode($procedure_json, true);

            foreach ($procedure_data as $procedure)
            {
                $created_procedure = PlanExpertiseProcedure::create([
                    'plan_expertise_id' => $expertise->id,

                    'name'              => $procedure['name'],
                    'price'             => $procedure['price'],
                    'faces_enabled'     => ($procedure['faces_enabled'] ? YesNoEnum::YES->value : YesNoEnum::NO->value),
                    'accept_harmonization' => ($expertise_slug === 'harmonizacao-facial' ? YesNoEnum::YES->value : YesNoEnum::NO->value),
                ]);

                $tuss_data = [
                    'name' =>  $procedure['tuss_data']['name'],
                    'code' =>  $procedure['tuss_data']['code'],
                ];

                $tuss = Tuss::firstOrCreate($tuss_data, $tuss_data); // first param = where, second param = data

                ProcedureTussPivot::create([
                    'plan_expertise_procedure_id'   => $created_procedure->id,
                    'tuss_id'                       => $tuss->id,
                ]);
            }
        }
    }
}
