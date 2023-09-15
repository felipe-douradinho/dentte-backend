<?php

namespace Modules\Expense\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Expense\Entities\ExpenseCategory;

class ExpenseCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $default_categories = [
            'Despesas Bancárias',
            'Contabilidade',
            'Infraestrutura',
            'Encargos de Funcionários',
            'Laboratórios',
            'Materiais Odontológicos',
            'Aluguel',
            'Telefone',
            'Internet',
            'Licença de Software',
        ];

        foreach ($default_categories as $default_category)
        {
            ExpenseCategory::create([
                'name'          => $default_category,
            ]);
        }
    }
}
