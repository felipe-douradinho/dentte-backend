<?php

namespace Modules\Localization\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Localization\Entities\Country;
use Modules\Localization\Entities\State;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $states = [
            [
                'name' => 'Rondônia',
                'iso_code' => 'RO',
                'region' => 'Região Norte'
            ],
            [
                'name' => 'Acre',
                'iso_code' => 'AC',
                'region' => 'Região Norte'
            ],
            [
                'name' => 'Amazonas',
                'iso_code' => 'AM',
                'region' => 'Região Norte'
            ],
            [
                'name' => 'Roraima',
                'iso_code' => 'RR',
                'region' => 'Região Norte'
            ],
            [
                'name' => 'Pará',
                'iso_code' => 'PA',
                'region' => 'Região Norte'
            ],
            [
                'name' => 'Amapá',
                'iso_code' => 'AP',
                'region' => 'Região Norte'
            ],
            [
                'name' => 'Tocantins',
                'iso_code' => 'TO',
                'region' => 'Região Norte'
            ],
            [
                'name' => 'Maranhão',
                'iso_code' => 'MA',
                'region' => 'Região Nordeste'
            ],
            [
                'name' => 'Piauí',
                'iso_code' => 'PI',
                'region' => 'Região Nordeste'
            ],
            [
                'name' => 'Ceará',
                'iso_code' => 'CE',
                'region' => 'Região Nordeste'
            ],
            [
                'name' => 'Rio Grande do Norte',
                'iso_code' => 'RN',
                'region' => 'Região Nordeste'
            ],
            [
                'name' => 'Paraíba',
                'iso_code' => 'PB',
                'region' => 'Região Nordeste'
            ],
            [
                'name' => 'Pernambuco',
                'iso_code' => 'PE',
                'region' => 'Região Nordeste'
            ],
            [
                'name' => 'Alagoas',
                'iso_code' => 'AL',
                'region' => 'Região Nordeste'
            ],
            [
                'name' => 'Sergipe',
                'iso_code' => 'SE',
                'region' => 'Região Nordeste'
            ],
            [
                'name' => 'Bahia',
                'iso_code' => 'BA',
                'region' => 'Região Nordeste'
            ],
            [
                'name' => 'Minas Gerais',
                'iso_code' => 'MG',
                'region' => 'Região Sudeste'
            ],
            [
                'name' => 'Espírito Santo',
                'iso_code' => 'ES',
                'region' => 'Região Sudeste'
            ],
            [
                'name' => 'Rio de Janeiro',
                'iso_code' => 'RJ',
                'region' => 'Região Sudeste'
            ],
            [
                'name' => 'São Paulo',
                'iso_code' => 'SP',
                'region' => 'Região Sudeste'
            ],
            [
                'name' => 'Paraná',
                'iso_code' => 'PR',
                'region' => 'Região Sul'
            ],
            [
                'name' => 'Santa Catarina',
                'iso_code' => 'SC',
                'region' => 'Região Sul'
            ],
            [
                'name' => 'Rio Grande do Sul',
                'iso_code' => 'RS',
                'region' => 'Região Sul'
            ],
            [
                'name' => 'Mato Grosso do Sul',
                'iso_code' => 'MS',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'name' => 'Mato Grosso',
                'iso_code' => 'MT',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'name' => 'Goiás',
                'iso_code' => 'GO',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'name' => 'Distrito Federal',
                'iso_code' => 'DF',
                'region' => 'Região Centro-Oeste'
            ],
        ];

        $country = Country::where('iso_code', 'BR')->first();

        foreach ($states as $state)
        {
            State::create([
                'country_id' => $country->id,
                ...$state
            ]);
        }

    }
}
