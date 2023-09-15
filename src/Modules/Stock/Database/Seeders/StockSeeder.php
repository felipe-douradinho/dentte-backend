<?php

namespace Modules\Stock\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Product\Entities\Product;
use Modules\Stock\Entities\Stock;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Product::get() as $product)
        {
            Stock::factory()
                ->create([
                    'product_id' => $product->id,
                ]);

        }
    }
}
