<?php

namespace Modules\Patient\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Core\Enums\GenderEnum;
use Modules\Patient\Entities\Patient;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\Patient\Entities\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model|TModel>
     */
    protected $model = Patient::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'          => fake()->name(),
            'gender'        => fake()->randomElement( GenderEnum::toValues() ),
            'birth'         => fake()->date(),
            'email'         => fake()->email(),
            'chart_number'  => fake()->dateTimeInInterval(), // Prontuário
            'notes'         => fake()->text(),
        ];
    }
}
