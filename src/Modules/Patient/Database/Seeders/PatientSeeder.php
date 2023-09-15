<?php

namespace Modules\Patient\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Core\Enums\GenderEnum;
use Modules\Patient\Entities\Patient;
use Modules\Referer\Entities\Referer;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Patient::factory()
           ->hasDocuments()    // creates a PatientDocument for each Patient
           ->hasPhones(2)      // creates many PatientPhone for each Patient
           ->hasSponsor()      // creates a PatientSponsor for each Patient
           ->hasAddress()      // creates a PatientAddress for each Patient
           ->create([
               'referer_id'    => Referer::inRandomOrder()->first()->id,
               'name'          => 'Maria José',
               'gender'        => GenderEnum::MALE->value,
           ]);

       Patient::factory()
           ->hasDocuments()     // creates a PatientDocument for each Patient
           ->hasPhones(2)      // creates many PatientPhone for each Patient
           ->hasSponsor()      // creates a PatientSponsor for each Patient
           ->hasAddress()      // creates a PatientAddress for each Patient
           ->create([
               'referer_id'    => Referer::inRandomOrder()->first()->id,
               'name'          => 'Pedro Paulo',
               'gender'        => GenderEnum::FEMALE->value,
           ]);

        Patient::factory()
            ->hasDocuments()    // creates a PatientDocument for each Patient
            ->hasPhones(2)      // creates many PatientPhone for each Patient
            ->hasSponsor()      // creates a PatientSponsor for each Patient
            ->hasAddress()      // creates a PatientAddress for each Patient
            ->count(10)
            ->create([
                'referer_id'    => Referer::inRandomOrder()->first()->id,
            ]);
    }
}
