<?php

namespace Modules\Stock\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Stock\Entities\Stock;
use Modules\Stock\Entities\StockHistory;
use Modules\Stock\Enums\StockHistoryActionEnum;
use Modules\User\Entities\User;

class StockHistoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model|TModel>
     */
    protected $model = StockHistory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() : array
    {
        return [
            'action' => fake()->randomElement(StockHistoryActionEnum::toValues()),
            'created_by' => User::inRandomOrder()->first()->id,
            'authorized_by' => fake()->randomElement([User::inRandomOrder()->first()->id, null]),
        ];
    }
}
