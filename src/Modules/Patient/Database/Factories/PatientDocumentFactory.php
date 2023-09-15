<?php

namespace Modules\Patient\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Patient\Entities\PatientDocument;
use Modules\Patient\Enums\DocumentTypeEnum;

class PatientDocumentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model|TModel>
     */
    protected $model = PatientDocument::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() : array
    {
        return [
            'name' => fake()->randomElement(DocumentTypeEnum::toValues()),
            'value' => fake()->numberBetween(00000000000, 99999999999),
        ];
    }
}
