<?php

namespace Modules\Chair\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Chair\Entities\Chair;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\Chair\Entities\Chair>
 */
class ChairFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model|TModel>
     */
    protected $model = Chair::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'          => fake()->name(),
            'is_enabled'    => fake()->randomElement( \Modules\Core\Enums\YesNoEnum::toValues() ),
        ];
    }
}
