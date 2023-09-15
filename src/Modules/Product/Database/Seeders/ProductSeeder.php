<?php

namespace Modules\Product\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Product\Entities\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::factory()->create([
            'name' => 'Produto de Exemplo',
        ]);

        Product::factory()
            ->count(15)
            ->create();
    }
}
