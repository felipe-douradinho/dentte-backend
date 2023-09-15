<?php

namespace Modules\Quote\Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Quote\Entities\Quote;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\Quote\Entities\Quote>
 */
class QuoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model|TModel>
     */
    protected $model = Quote::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $total_original = fake()->randomFloat(2, 100, 10000);
        $discount = fake()->randomFloat(2, 0, 10);
        $total_final = $total_original - $discount;

        return [
            'date'                      => Carbon::now(),
            'status'                    => fake()->randomElement(\Modules\Quote\Enums\QuoteStatusEnum::toValues()),
            'total_original'            => $total_original,
            'discount_type'             => \Modules\Quote\Enums\QuoteDiscountTypeEnum::FIXED,
            'discount'                  => $discount,
            'total_final'               => $total_final,
            'is_installments_enabled'   => fake()->randomElement(\Modules\Core\Enums\YesNoEnum::toValues()),
            'entry_value'               => fake()->randomFloat(2, 0, ($total_final / 3)),
            'installments'              => fake()->numberBetween(1, 12),
            'print_odontogram_and_hof'  => fake()->randomElement(\Modules\Core\Enums\YesNoEnum::toValues()),
            'print_just_total'          => fake()->randomElement(\Modules\Core\Enums\YesNoEnum::toValues()),
            'gen_contract_on_approve'   => fake()->randomElement(\Modules\Core\Enums\YesNoEnum::toValues()),
            'notes'                     => fake()->text(100),
        ];
    }
}
