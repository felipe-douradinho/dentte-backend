<?php

namespace Modules\Patient\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Patient\Entities\PatientSponsor;
use Modules\Patient\Enums\DocumentTypeEnum;

class PatientSponsorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model|TModel>
     */
    protected $model = PatientSponsor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() : array
    {
        return [
            'name'              => fake()->name(),
            'document_type'     => fake()->randomElement( DocumentTypeEnum::toValues() ),
            'document_number'   => fake()->numberBetween(00000000000, 99999999999),
            'birth'             => fake()->dateTimeBetween(),
            'phone'             => fake()->phoneNumber(),
        ];
    }
}
