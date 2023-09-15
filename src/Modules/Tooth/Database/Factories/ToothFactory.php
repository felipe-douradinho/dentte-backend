<?php

namespace Modules\Tooth\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Tooth\Entities\Tooth;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\Tooth\Entities\Tooth>
 */
class ToothFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model|TModel>
     */
    protected $model = Tooth::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
        ];
    }
}
