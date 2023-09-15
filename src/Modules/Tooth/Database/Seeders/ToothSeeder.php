<?php

namespace Modules\Tooth\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Tooth\Entities\Tooth;
use Modules\Tooth\Enums\ToothCategoryEnum;
use Modules\Tooth\Enums\ToothTypeEnum;

class ToothSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teeth = [
            [ 'name' => '11', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::PERMANENT->value, ],
            [ 'name' => '12', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::PERMANENT->value, ],
            [ 'name' => '13', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::PERMANENT->value, ],
            [ 'name' => '14', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::PERMANENT->value, ],
            [ 'name' => '15', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::PERMANENT->value, ],
            [ 'name' => '16', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::PERMANENT->value, ],
            [ 'name' => '17', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::PERMANENT->value, ],
            [ 'name' => '18', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::PERMANENT->value, ],
            [ 'name' => '21', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::PERMANENT->value, ],
            [ 'name' => '22', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::PERMANENT->value, ],
            [ 'name' => '23', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::PERMANENT->value, ],
            [ 'name' => '24', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::PERMANENT->value, ],
            [ 'name' => '25', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::PERMANENT->value, ],
            [ 'name' => '26', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::PERMANENT->value, ],
            [ 'name' => '27', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::PERMANENT->value, ],
            [ 'name' => '28', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::PERMANENT->value, ],
            [ 'name' => '31', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::PERMANENT->value, ],
            [ 'name' => '32', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::PERMANENT->value, ],
            [ 'name' => '33', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::PERMANENT->value, ],
            [ 'name' => '34', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::PERMANENT->value, ],
            [ 'name' => '35', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::PERMANENT->value, ],
            [ 'name' => '36', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::PERMANENT->value, ],
            [ 'name' => '37', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::PERMANENT->value, ],
            [ 'name' => '38', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::PERMANENT->value, ],
            [ 'name' => '41', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::PERMANENT->value, ],
            [ 'name' => '42', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::PERMANENT->value, ],
            [ 'name' => '43', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::PERMANENT->value, ],
            [ 'name' => '44', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::PERMANENT->value, ],
            [ 'name' => '45', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::PERMANENT->value, ],
            [ 'name' => '46', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::PERMANENT->value, ],
            [ 'name' => '47', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::PERMANENT->value, ],
            [ 'name' => '48', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::PERMANENT->value, ],

            [ 'name' => '51', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::DECIDUOUS->value, ],
            [ 'name' => '52', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::DECIDUOUS->value, ],
            [ 'name' => '53', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::DECIDUOUS->value, ],
            [ 'name' => '54', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::DECIDUOUS->value, ],
            [ 'name' => '55', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::DECIDUOUS->value, ],
            [ 'name' => '61', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::DECIDUOUS->value, ],
            [ 'name' => '62', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::DECIDUOUS->value, ],
            [ 'name' => '63', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::DECIDUOUS->value, ],
            [ 'name' => '64', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::DECIDUOUS->value, ],
            [ 'name' => '65', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::DECIDUOUS->value, ],
            [ 'name' => '71', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::DECIDUOUS->value, ],
            [ 'name' => '72', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::DECIDUOUS->value, ],
            [ 'name' => '73', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::DECIDUOUS->value, ],
            [ 'name' => '74', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::DECIDUOUS->value, ],
            [ 'name' => '75', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::DECIDUOUS->value, ],
            [ 'name' => '81', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::DECIDUOUS->value, ],
            [ 'name' => '82', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::DECIDUOUS->value, ],
            [ 'name' => '83', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::DECIDUOUS->value, ],
            [ 'name' => '84', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::DECIDUOUS->value, ],
            [ 'name' => '85', 'type' => ToothTypeEnum::TOOTH->value, 'category' => ToothCategoryEnum::DECIDUOUS->value, ],

            [ 'name' => 'Maxila', 'type' => ToothTypeEnum::REGION->value, 'category' => ToothCategoryEnum::PERMANENT->value, ],
            [ 'name' => 'Mandíbula', 'type' => ToothTypeEnum::REGION->value, 'category' => ToothCategoryEnum::PERMANENT->value, ],
            [ 'name' => 'Face', 'type' => ToothTypeEnum::REGION->value, 'category' => ToothCategoryEnum::PERMANENT->value, ],
            [ 'name' => 'Arcada Superior', 'type' => ToothTypeEnum::REGION->value, 'category' => ToothCategoryEnum::PERMANENT->value, ],
            [ 'name' => 'Arcada Inferior', 'type' => ToothTypeEnum::REGION->value, 'category' => ToothCategoryEnum::PERMANENT->value, ],
            [ 'name' => 'Arcadas', 'type' => ToothTypeEnum::REGION->value, 'category' => ToothCategoryEnum::PERMANENT->value, ],

            [ 'name' => 'Maxila', 'type' => ToothTypeEnum::REGION->value, 'category' => ToothCategoryEnum::DECIDUOUS->value, ],
            [ 'name' => 'Mandíbula', 'type' => ToothTypeEnum::REGION->value, 'category' => ToothCategoryEnum::DECIDUOUS->value, ],
            [ 'name' => 'Face', 'type' => ToothTypeEnum::REGION->value, 'category' => ToothCategoryEnum::DECIDUOUS->value, ],
            [ 'name' => 'Arcada Superior', 'type' => ToothTypeEnum::REGION->value, 'category' => ToothCategoryEnum::DECIDUOUS->value, ],
            [ 'name' => 'Arcada Inferior', 'type' => ToothTypeEnum::REGION->value, 'category' => ToothCategoryEnum::DECIDUOUS->value, ],
            [ 'name' => 'Arcadas', 'type' => ToothTypeEnum::REGION->value, 'category' => ToothCategoryEnum::DECIDUOUS->value, ],

            [ 'name' => 'Bochecha', 'type' => ToothTypeEnum::REGION->value, 'category' => ToothCategoryEnum::HOF->value, ],
            [ 'name' => 'Canto dos Olhos', 'type' => ToothTypeEnum::REGION->value, 'category' => ToothCategoryEnum::HOF->value, ],
            [ 'name' => 'Glabela', 'type' => ToothTypeEnum::REGION->value, 'category' => ToothCategoryEnum::HOF->value, ],
            [ 'name' => 'Lábios', 'type' => ToothTypeEnum::REGION->value, 'category' => ToothCategoryEnum::HOF->value, ],
            [ 'name' => 'Malar', 'type' => ToothTypeEnum::REGION->value, 'category' => ToothCategoryEnum::HOF->value, ],
            [ 'name' => 'Mandíbula', 'type' => ToothTypeEnum::REGION->value, 'category' => ToothCategoryEnum::HOF->value, ],
            [ 'name' => 'Mento', 'type' => ToothTypeEnum::REGION->value, 'category' => ToothCategoryEnum::HOF->value, ],
            [ 'name' => 'Nariz', 'type' => ToothTypeEnum::REGION->value, 'category' => ToothCategoryEnum::HOF->value, ],
            [ 'name' => 'Olheiras', 'type' => ToothTypeEnum::REGION->value, 'category' => ToothCategoryEnum::HOF->value, ],
            [ 'name' => 'Pescoço', 'type' => ToothTypeEnum::REGION->value, 'category' => ToothCategoryEnum::HOF->value, ],
            [ 'name' => 'Pré Jowl', 'type' => ToothTypeEnum::REGION->value, 'category' => ToothCategoryEnum::HOF->value, ],
            [ 'name' => 'Região Frontal', 'type' => ToothTypeEnum::REGION->value, 'category' => ToothCategoryEnum::HOF->value, ],
            [ 'name' => 'Submental (papada)', 'type' => ToothTypeEnum::REGION->value, 'category' => ToothCategoryEnum::HOF->value, ],
            [ 'name' => 'Sulco Nasogeniano', 'type' => ToothTypeEnum::REGION->value, 'category' => ToothCategoryEnum::HOF->value, ],
            [ 'name' => 'Têmpora', 'type' => ToothTypeEnum::REGION->value, 'category' => ToothCategoryEnum::HOF->value, ],
        ];

        foreach ($teeth as $tooth)
        {
            Tooth::factory()->create([
                'name' => $tooth['name'],
                'type' => $tooth['type'],
                'category' => $tooth['category'],
            ]);
        }
    }
}
