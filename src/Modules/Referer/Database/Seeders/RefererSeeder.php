<?php

namespace Modules\Referer\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Referer\Entities\Referer;

class RefererSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $referers = [
            'Indicação de amigo',
            'Indicação de outro Dentista',
            'Google',
            'Facebook',
            'Instagram',
            'Jornal',
            'Outdoor',
            'Rádio',
            'TV',
            'Convênio',
            'Outros'
        ];

        foreach ($referers as $referer)
        {
            Referer::create([
                'name'          => $referer,
            ]);
        }
    }
}
