<?php

namespace Modules\Expense\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Expense\Entities\Expense;
use Modules\Expense\Entities\ExpenseCategory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\Expense\Entities\Expense>
 */
class ExpenseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model|TModel>
     */
    protected $model = Expense::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'expense_category_id'   => ExpenseCategory::inRandomOrder()->first()->id,
            'title'                 => "Despesa {$this->faker->randomNumber(2)}",
            'value'                 => fake()->randomDigit(),
            'due_date'              => fake()->date('Y-m-d', '1 month'),
            'notes'                 => fake()->text(),
        ];
    }
}
