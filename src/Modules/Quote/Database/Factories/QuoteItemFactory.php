<?php

namespace Modules\Quote\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Plan\Entities\Plan;
use Modules\Quote\Entities\QuoteItem;

class QuoteItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model|TModel>
     */
    protected $model = QuoteItem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() : array
    {
        $plan = Plan::inRandomOrder()->first();
        $procedure = $plan->expertises->random()->procedures->random();

        return [
            'plan_id'                       => $plan->id,
            'plan_expertise_procedure_id'   => $procedure->id,

            'price'                         => $procedure->price,
        ];
    }
}
