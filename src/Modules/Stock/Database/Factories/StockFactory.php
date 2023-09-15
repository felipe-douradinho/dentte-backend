<?php

namespace Modules\Stock\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Stock\Entities\Stock;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\Stock\Entities\Stock>
 */
class StockFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model|TModel>
     */
    protected $model = Stock::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'quantity' => fake()->numberBetween(0, 10),
            'ideal_quantity' => fake()->numberBetween(1, 10),
        ];
    }
}
