<?php

namespace Modules\Plan\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Plan\Entities\PlanExpertiseProcedure;

class PlanExpertiseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model|TModel>
     */
    protected $model = PlanExpertiseProcedure::class;

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
