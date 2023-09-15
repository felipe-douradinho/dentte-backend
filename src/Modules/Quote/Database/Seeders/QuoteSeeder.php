<?php

namespace Modules\Quote\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Patient\Entities\Patient;
use Modules\Plan\Entities\Plan;
use Modules\Quote\Entities\Quote;
use Modules\Quote\Entities\QuoteItemHofQty;
use Modules\Tooth\Entities\Tooth;
use Modules\User\Entities\User;

class QuoteSeeder extends Seeder
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
            ##############################################################
            # TOOTH OF CATEGORY PERMANENT, DECIUOUS AND HOF
            $this->createQuote(
                $patient,
                Tooth::typeTooth()->categoryPermanent()->get()->random()
            );

            $this->createQuote(
                $patient,
                Tooth::typeTooth()->categoryDeciduous()->get()->random()
            );
            ##############################################################

            ##############################################################
            # REGION OF CATEGORY PERMANENT, DECIUOUS AND HOF
            $this->createQuote(
                $patient,
                Tooth::typeRegion()->categoryPermanent()->get()->random()
            );

            $this->createQuote(
                $patient,
                Tooth::typeRegion()->categoryDeciduous()->get()->random()
            );

            // -- hof tooth
            $quote_hof = $this->createQuote(
                $patient,
                Tooth::typeRegion()->categoryHof()->get()->random()
            );

            // -- add hof qty (UI/MLs)
            foreach ($quote_hof->items as $quote_item)
            {
                QuoteItemHofQty::factory()->create([
                    'quote_item_id' => $quote_item->id
                ]);
            }
            ##############################################################
        }
    }

    private function createQuote(Patient $patient, Tooth $tooth): Quote
    {
        $plan = Plan::inRandomOrder()->first();
        $procedure = $plan->expertises->random()->procedures->random();

        return Quote::factory()
            ->hasItems(2, [
                'plan_id'                       => $plan->id,
                'plan_expertise_procedure_id'   => $procedure->id,
                'user_id'                       => User::inRandomOrder()->first()->id,
                'price'                         => $procedure->price,

                'tooth_id'                      => $tooth->id,
            ])
            ->create([
                'patient_id'    => $patient->id,
                'title'         => "Orçamento de {$patient->name}",
            ]);
    }
}
