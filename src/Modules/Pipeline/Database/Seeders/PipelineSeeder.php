<?php

namespace Modules\Pipeline\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Core\Enums\YesNoEnum;
use Modules\Pipeline\Entities\Pipeline;

class PipelineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pipelines = [
            [
                'name' => 'Funil de vendas',
                'description' => 'Funil utilizado para o controle do seu fluxo de vendas',
                'is_default' => YesNoEnum::YES->value,
                'type' => \Modules\Pipeline\Enums\PipelineTypesEnum::SALES->value,
            ],
            [
                'name' => 'Funil de Agendamento',
                'description' => 'Funil utilizado para o controle dos agendamentos',
                'is_default' => YesNoEnum::YES->value,
                'type' => \Modules\Pipeline\Enums\PipelineTypesEnum::SCHEDULING->value,
            ],
            [
                'name' => 'Funil personalizado',
                'description' => 'Um funil personalizado',
                'is_default' => YesNoEnum::NO->value,
                'type' => \Modules\Pipeline\Enums\PipelineTypesEnum::CUSTOM->value,
            ],
        ];

        foreach ($pipelines  as $pipeline) {
            Pipeline::create($pipeline);
        }
    }
}
