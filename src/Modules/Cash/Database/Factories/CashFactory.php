<?php

namespace Modules\Cash\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Cash\Entities\Cash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\Cash\Entities\Cash>
 */
class CashFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model|TModel>
     */
    protected $model = Cash::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        //return [
        //    'name' => fake()->name(),
        //];
    }
}
