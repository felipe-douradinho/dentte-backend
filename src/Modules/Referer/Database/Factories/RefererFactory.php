<?php

namespace Modules\Referer\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Referer\Entities\Referer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\Referer\Entities\Referer>
 */
class RefererFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model|TModel>
     */
    protected $model = Referer::class;

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
