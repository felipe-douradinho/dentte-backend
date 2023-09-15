<?php

namespace Modules\Patient\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Patient\Entities\PatientPlan;
use Modules\Patient\Enums\DocumentTypeEnum;

class PatientPlanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model|TModel>
     */
    protected $model = PatientPlan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() : array
    {
        return [
            'number'                    => fake()->numberBetween(00000000000, 99999999999),
            'sponsor_name'              => fake()->name(),
            'sponsor_document_type'     => fake()->randomElement(DocumentTypeEnum::toValues()),
            'sponsor_document_number'   => fake()->numberBetween(00000000000, 99999999999),
        ];
    }
}
