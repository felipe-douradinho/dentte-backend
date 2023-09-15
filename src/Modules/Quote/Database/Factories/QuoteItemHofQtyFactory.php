<?php

namespace Modules\Quote\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Quote\Entities\QuoteItemHofQty;

class QuoteItemHofQtyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model|TModel>
     */
    protected $model = QuoteItemHofQty::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() : array
    {
        return [
            'qty' => fake()->numberBetween(1, 20),
        ];
    }
}
