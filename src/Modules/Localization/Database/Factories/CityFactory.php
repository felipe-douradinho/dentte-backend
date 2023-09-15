<?php

namespace Modules\Localization\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Localization\Entities\City;

class CityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model|TModel>
     */
    protected $model = City::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() : array
    {
        //return [
        //    'name' => fake()->name(),
        //];
    }
}
