<?php

namespace Modules\Stock\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Stock\Entities\Stock;
use Modules\Stock\Entities\StockHistory;

class StockHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Stock::get() as $stock)
        {
            StockHistory::factory()
                ->create([
                    'stock_id' => $stock->id,
                ]);

            StockHistory::factory()
                ->create([
                    'stock_id' => $stock->id,
                ]);
        }
    }
}
