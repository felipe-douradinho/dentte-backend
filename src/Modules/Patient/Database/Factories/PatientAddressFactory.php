<?php

namespace Modules\Patient\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Localization\Entities\City;
use Modules\Patient\Entities\PatientAddress;

class PatientAddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model|TModel>
     */
    protected $model = PatientAddress::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() : array
    {
        return [
            'city_id'       => City::inRandomOrder()->first()->id,
            'address'       => fake()->streetName(),
            'number'        => fake()->numberBetween(1, 9999),
            'complement'    => fake()->randomElement(['Apto', 'Casa', 'Sala', 'Loja']),
            'neighborhood'  => fake()->randomElement(['Centro', 'Bairro', 'Vila', 'Jardim']),
            'zip_code'      => fake()->numberBetween(10000000, 99999999),
        ];
    }
}
