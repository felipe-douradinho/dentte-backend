<?php

namespace Modules\Pipeline\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Patient\Entities\Patient;
use Modules\Pipeline\Entities\Card;
use Modules\Pipeline\Entities\Pipeline;
use Modules\User\Entities\User;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::first();

        foreach (Pipeline::get() as $pipeline)
        {
            foreach ($pipeline->stages as $i => $stage)
            {
                $card = new Card;

                $card->stage_id      = $stage->id;
                $card->user_id       = $user->id;
                $card->name = "Card {$pipeline->name} #{$i}";

                if($i === 0) {
                    $card->patient_id = Patient::first()->id;
                } else {
                    $card->patient_id = fake()->randomElement([ Patient::inRandomOrder()->first()->id, null ]);
                }

                $card->saveQuietly();

            }
        }
    }
}
