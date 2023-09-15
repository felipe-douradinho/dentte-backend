<?php

namespace Modules\Pipeline\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Pipeline\Entities\Pipeline;
use Modules\Pipeline\Entities\Stage;
use Modules\Pipeline\Enums\PipelineTypesEnum;
use Modules\Pipeline\Enums\StageIconsEnum;

class StageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createSalesStages();
        $this->createSchedulingStages();
        $this->createCustomStages();
    }

    private function createSalesStages()
    {
        foreach (Pipeline::where('type', '=', PipelineTypesEnum::SALES->value)->get() as $pipeline)
        {
            Stage::create([
                'pipeline_id' => $pipeline->id,
                'name' => 'Em aberto',
                'icon' => StageIconsEnum::ICON_DEFAULT->value,
            ]);

            Stage::create([
                'pipeline_id' => $pipeline->id,
                'name' => 'Em andamento',
                'icon' => StageIconsEnum::ICON_DEFAULT->value,
            ]);

            Stage::create([
                'pipeline_id' => $pipeline->id,
                'name' => 'Ganha',
                'icon' => StageIconsEnum::ICON_CHECK->value,
            ]);

            Stage::create([
                'pipeline_id' => $pipeline->id,
                'name' => 'Perdida',
                'icon' => StageIconsEnum::ICON_CLOSE->value,
            ]);
        }
    }

    private function createSchedulingStages()
    {
        foreach (Pipeline::where('type', '=', PipelineTypesEnum::SCHEDULING->value)->get() as $pipeline)
        {
            Stage::create([
                'pipeline_id' => $pipeline->id,
                'name' => 'Em aberto',
                'icon' => StageIconsEnum::ICON_DEFAULT->value,
            ]);

            Stage::create([
                'pipeline_id' => $pipeline->id,
                'name' => 'Em andamento',
                'icon' => StageIconsEnum::ICON_DEFAULT->value,
            ]);

            Stage::create([
                'pipeline_id' => $pipeline->id,
                'name' => 'Agendada',
                'icon' => StageIconsEnum::ICON_CHECK->value,
            ]);

            Stage::create([
                'pipeline_id' => $pipeline->id,
                'name' => 'Perdida',
                'icon' => StageIconsEnum::ICON_CLOSE->value,
            ]);
        }
    }

    private function createCustomStages()
    {
        foreach (Pipeline::where('type', '=', PipelineTypesEnum::CUSTOM->value)->get() as $pipeline)
        {
            Stage::create([
                'pipeline_id' => $pipeline->id,
                'name' => 'Em aberto',
                'icon' => StageIconsEnum::ICON_DEFAULT->value,
            ]);

            Stage::create([
                'pipeline_id' => $pipeline->id,
                'name' => 'Em andamento',
                'icon' => StageIconsEnum::ICON_DEFAULT->value,
            ]);

            Stage::create([
                'pipeline_id' => $pipeline->id,
                'name' => 'Concluída',
                'icon' => StageIconsEnum::ICON_CHECK->value,
            ]);

            Stage::create([
                'pipeline_id' => $pipeline->id,
                'name' => 'Perdida',
                'icon' => StageIconsEnum::ICON_CLOSE->value,
            ]);
        }
    }
}
