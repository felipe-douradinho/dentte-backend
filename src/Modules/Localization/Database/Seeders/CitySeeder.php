<?php

namespace Modules\Localization\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Localization\Entities\City;
use Modules\Localization\Entities\State;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            [
                'iso_code' => 'RO',
                'name' => 'Alta Floresta D´oeste',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Ariquemes',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Cabixi',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Cacoal',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Cerejeiras',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Colorado do Oeste',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Corumbiara',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Costa Marques',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Espigão D´oeste',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Guajará-mirim',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Jaru',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Ji-paraná',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Machadinho D´oeste',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Nova Brasilândia D´oeste',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Ouro Preto do Oeste',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Pimenta Bueno',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Porto Velho',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Presidente Médici',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Rio Crespo',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Rolim de Moura',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Santa Luzia D´oeste',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Vilhena',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'São Miguel do Guaporé',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Nova Mamoré',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Alvorada D´oeste',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Alto Alegre Dos Parecis',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Alto Paraíso',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Buritis',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Novo Horizonte do Oeste',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Cacaulândia',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Campo Novo de Rondônia',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Candeias do Jamari',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Castanheiras',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Chupinguaia',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Cujubim',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Governador Jorge Teixeira',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Itapuã do Oeste',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Ministro Andreazza',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Mirante da Serra',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Monte Negro',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Nova União',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Parecis',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Pimenteiras do Oeste',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Primavera de Rondônia',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'São Felipe D´oeste',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'São Francisco do Guaporé',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Seringueiras',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Teixeirópolis',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Theobroma',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Urupá',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Vale do Anari',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RO',
                'name' => 'Vale do Paraíso',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AC',
                'name' => 'Acrelândia',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AC',
                'name' => 'Assis Brasil',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AC',
                'name' => 'Brasiléia',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AC',
                'name' => 'Bujari',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AC',
                'name' => 'Capixaba',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AC',
                'name' => 'Cruzeiro do Sul',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AC',
                'name' => 'Epitaciolândia',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AC',
                'name' => 'Feijó',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AC',
                'name' => 'Jordão',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AC',
                'name' => 'Mâncio Lima',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AC',
                'name' => 'Manoel Urbano',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AC',
                'name' => 'Marechal Thaumaturgo',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AC',
                'name' => 'Plácido de Castro',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AC',
                'name' => 'Porto Walter',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AC',
                'name' => 'Rio Branco',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AC',
                'name' => 'Rodrigues Alves',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AC',
                'name' => 'Santa Rosa do Purus',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AC',
                'name' => 'Senador Guiomard',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AC',
                'name' => 'Sena Madureira',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AC',
                'name' => 'Tarauacá',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AC',
                'name' => 'Xapuri',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AC',
                'name' => 'Porto Acre',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Alvarães',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Amaturá',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Anamã',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Anori',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Apuí',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Atalaia do Norte',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Autazes',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Barcelos',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Barreirinha',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Benjamin Constant',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Beruri',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Boa Vista do Ramos',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Boca do Acre',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Borba',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Caapiranga',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Canutama',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Carauari',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Careiro',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Careiro da Várzea',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Coari',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Codajás',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Eirunepé',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Envira',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Fonte Boa',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Guajará',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Humaitá',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Ipixuna',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Iranduba',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Itacoatiara',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Itamarati',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Itapiranga',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Japurá',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Juruá',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Jutaí',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Lábrea',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Manacapuru',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Manaquiri',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Manaus',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Manicoré',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Maraã',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Maués',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Nhamundá',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Nova Olinda do Norte',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Novo Airão',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Novo Aripuanã',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Parintins',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Pauini',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Presidente Figueiredo',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Rio Preto da Eva',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Santa Isabel do Rio Negro',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Santo Antônio do Içá',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'São Gabriel da Cachoeira',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'São Paulo de Olivença',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'São Sebastião do Uatumã',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Silves',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Tabatinga',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Tapauá',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Tefé',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Tonantins',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Uarini',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Urucará',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AM',
                'name' => 'Urucurituba',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RR',
                'name' => 'Amajari',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RR',
                'name' => 'Alto Alegre',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RR',
                'name' => 'Boa Vista',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RR',
                'name' => 'Bonfim',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RR',
                'name' => 'Cantá',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RR',
                'name' => 'Caracaraí',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RR',
                'name' => 'Caroebe',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RR',
                'name' => 'Iracema',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RR',
                'name' => 'Mucajaí',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RR',
                'name' => 'Normandia',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RR',
                'name' => 'Pacaraima',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RR',
                'name' => 'Rorainópolis',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RR',
                'name' => 'São João da Baliza',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RR',
                'name' => 'São Luiz',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'RR',
                'name' => 'Uiramutã',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Abaetetuba',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Abel Figueiredo',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Acará',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Afuá',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Água Azul do Norte',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Alenquer',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Almeirim',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Altamira',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Anajás',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Ananindeua',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Anapu',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Augusto Corrêa',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Aurora do Pará',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Aveiro',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Bagre',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Baião',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Bannach',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Barcarena',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Belém',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Belterra',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Benevides',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Bom Jesus do Tocantins',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Bonito',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Bragança',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Brasil Novo',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Brejo Grande do Araguaia',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Breu Branco',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Breves',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Bujaru',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Cachoeira do Piriá',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Cachoeira do Arari',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Cametá',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Canaã Dos Carajás',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Capanema',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Capitão Poço',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Castanhal',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Chaves',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Colares',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Conceição do Araguaia',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Concórdia do Pará',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Cumaru do Norte',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Curionópolis',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Curralinho',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Curuá',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Curuçá',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Dom Eliseu',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Eldorado Dos Carajás',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Faro',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Floresta do Araguaia',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Garrafão do Norte',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Goianésia do Pará',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Gurupá',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Igarapé-açu',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Igarapé-miri',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Inhangapi',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Ipixuna do Pará',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Irituia',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Itaituba',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Itupiranga',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Jacareacanga',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Jacundá',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Juruti',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Limoeiro do Ajuru',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Mãe do Rio',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Magalhães Barata',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Marabá',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Maracanã',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Marapanim',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Marituba',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Medicilândia',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Melgaço',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Mocajuba',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Moju',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Mojuí dos Campos',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Monte Alegre',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Muaná',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Nova Esperança do Piriá',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Nova Ipixuna',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Nova Timboteua',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Novo Progresso',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Novo Repartimento',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Óbidos',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Oeiras do Pará',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Oriximiná',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Ourém',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Ourilândia do Norte',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Pacajá',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Palestina do Pará',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Paragominas',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Parauapebas',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Pau D´arco',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Peixe-boi',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Piçarra',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Placas',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Ponta de Pedras',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Portel',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Porto de Moz',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Prainha',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Primavera',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Quatipuru',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Redenção',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Rio Maria',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Rondon do Pará',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Rurópolis',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Salinópolis',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Salvaterra',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Santa Bárbara do Pará',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Santa Cruz do Arari',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Santa Isabel do Pará',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Santa Luzia do Pará',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Santa Maria Das Barreiras',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Santa Maria do Pará',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Santana do Araguaia',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Santarém',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Santarém Novo',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Santo Antônio do Tauá',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'São Caetano de Odivelas',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'São Domingos do Araguaia',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'São Domingos do Capim',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'São Félix do Xingu',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'São Francisco do Pará',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'São Geraldo do Araguaia',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'São João da Ponta',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'São João de Pirabas',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'São João do Araguaia',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'São Miguel do Guamá',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'São Sebastião da Boa Vista',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Sapucaia',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Senador José Porfírio',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Soure',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Tailândia',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Terra Alta',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Terra Santa',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Tomé-açu',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Tracuateua',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Trairão',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Tucumã',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Tucuruí',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Ulianópolis',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Uruará',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Vigia',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Viseu',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Vitória do Xingu',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'PA',
                'name' => 'Xinguara',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AP',
                'name' => 'Serra do Navio',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AP',
                'name' => 'Amapá',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AP',
                'name' => 'Pedra Branca do Amapari',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AP',
                'name' => 'Calçoene',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AP',
                'name' => 'Cutias',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AP',
                'name' => 'Ferreira Gomes',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AP',
                'name' => 'Itaubal',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AP',
                'name' => 'Laranjal do Jari',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AP',
                'name' => 'Macapá',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AP',
                'name' => 'Mazagão',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AP',
                'name' => 'Oiapoque',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AP',
                'name' => 'Porto Grande',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AP',
                'name' => 'Pracuúba',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AP',
                'name' => 'Santana',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AP',
                'name' => 'Tartarugalzinho',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'AP',
                'name' => 'Vitória do Jari',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Abreulândia',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Aguiarnópolis',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Aliança do Tocantins',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Almas',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Alvorada',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Ananás',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Angico',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Aparecida do Rio Negro',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Aragominas',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Araguacema',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Araguaçu',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Araguaína',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Araguanã',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Araguatins',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Arapoema',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Arraias',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Augustinópolis',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Aurora do Tocantins',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Axixá do Tocantins',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Babaçulândia',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Bandeirantes do Tocantins',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Barra do Ouro',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Barrolândia',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Bernardo Sayão',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Bom Jesus do Tocantins',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Brasilândia do Tocantins',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Brejinho de Nazaré',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Buriti do Tocantins',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Cachoeirinha',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Campos Lindos',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Cariri do Tocantins',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Carmolândia',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Carrasco Bonito',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Caseara',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Centenário',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Chapada de Areia',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Chapada da Natividade',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Colinas do Tocantins',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Combinado',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Conceição do Tocantins',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Couto de Magalhães',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Cristalândia',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Crixás do Tocantins',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Darcinópolis',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Dianópolis',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Divinópolis do Tocantins',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Dois Irmãos do Tocantins',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Dueré',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Esperantina',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Fátima',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Figueirópolis',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Filadélfia',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Formoso do Araguaia',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Fortaleza do Tabocão',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Goianorte',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Goiatins',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Guaraí',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Gurupi',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Ipueiras',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Itacajá',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Itaguatins',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Itapiratins',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Itaporã do Tocantins',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Jaú do Tocantins',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Juarina',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Lagoa da Confusão',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Lagoa do Tocantins',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Lajeado',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Lavandeira',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Lizarda',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Luzinópolis',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Marianópolis do Tocantins',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Mateiros',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Maurilândia do Tocantins',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Miracema do Tocantins',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Miranorte',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Monte do Carmo',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Monte Santo do Tocantins',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Palmeiras do Tocantins',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Muricilândia',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Natividade',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Nazaré',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Nova Olinda',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Nova Rosalândia',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Novo Acordo',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Novo Alegre',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Novo Jardim',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Oliveira de Fátima',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Palmeirante',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Palmeirópolis',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Paraíso do Tocantins',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Paranã',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Pau D´arco',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Pedro Afonso',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Peixe',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Pequizeiro',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Colméia',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Pindorama do Tocantins',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Piraquê',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Pium',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Ponte Alta do Bom Jesus',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Ponte Alta do Tocantins',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Porto Alegre do Tocantins',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Porto Nacional',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Praia Norte',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Presidente Kennedy',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Pugmil',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Recursolândia',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Riachinho',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Rio da Conceição',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Rio Dos Bois',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Rio Sono',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Sampaio',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Sandolândia',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Santa fé do Araguaia',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Santa Maria do Tocantins',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Santa Rita do Tocantins',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Santa Rosa do Tocantins',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Santa Tereza do Tocantins',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Santa Terezinha do Tocantins',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'São Bento do Tocantins',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'São Félix do Tocantins',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'São Miguel do Tocantins',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'São Salvador do Tocantins',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'São Sebastião do Tocantins',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'São Valério da Natividade',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Silvanópolis',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Sítio Novo do Tocantins',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Sucupira',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Taguatinga',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Taipas do Tocantins',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Talismã',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Palmas',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Tocantínia',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Tocantinópolis',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Tupirama',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Tupiratins',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Wanderlândia',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'TO',
                'name' => 'Xambioá',
                'region' => 'Região Norte'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Açailândia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Afonso Cunha',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Água Doce do Maranhão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Alcântara',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Aldeias Altas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Altamira do Maranhão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Alto Alegre do Maranhão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Alto Alegre do Pindaré',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Alto Parnaíba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Amapá do Maranhão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Amarante do Maranhão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Anajatuba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Anapurus',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Apicum-açu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Araguanã',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Araioses',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Arame',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Arari',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Axixá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Bacabal',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Bacabeira',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Bacuri',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Bacurituba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Balsas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Barão de Grajaú',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Barra do Corda',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Barreirinhas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Belágua',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Bela Vista do Maranhão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Benedito Leite',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Bequimão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Bernardo do Mearim',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Boa Vista do Gurupi',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Bom Jardim',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Bom Jesus Das Selvas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Bom Lugar',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Brejo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Brejo de Areia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Buriti',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Buriti Bravo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Buriticupu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Buritirana',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Cachoeira Grande',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Cajapió',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Cajari',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Campestre do Maranhão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Cândido Mendes',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Cantanhede',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Capinzal do Norte',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Carolina',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Carutapera',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Caxias',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Cedral',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Central do Maranhão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Centro do Guilherme',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Centro Novo do Maranhão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Chapadinha',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Cidelândia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Codó',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Coelho Neto',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Colinas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Conceição do Lago-açu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Coroatá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Cururupu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Davinópolis',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Dom Pedro',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Duque Bacelar',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Esperantinópolis',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Estreito',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Feira Nova do Maranhão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Fernando Falcão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Formosa da Serra Negra',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Fortaleza Dos Nogueiras',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Fortuna',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Godofredo Viana',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Gonçalves Dias',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Governador Archer',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Governador Edison Lobão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Governador Eugênio Barros',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Governador Luiz Rocha',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Governador Newton Bello',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Governador Nunes Freire',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Graça Aranha',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Grajaú',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Guimarães',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Humberto de Campos',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Icatu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Igarapé do Meio',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Igarapé Grande',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Imperatriz',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Itaipava do Grajaú',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Itapecuru Mirim',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Itinga do Maranhão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Jatobá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Jenipapo Dos Vieiras',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'João Lisboa',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Joselândia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Junco do Maranhão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Lago da Pedra',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Lago do Junco',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Lago Verde',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Lagoa do Mato',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Lago Dos Rodrigues',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Lagoa Grande do Maranhão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Lajeado Novo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Lima Campos',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Loreto',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Luís Domingues',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Magalhães de Almeida',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Maracaçumé',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Marajá do Sena',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Maranhãozinho',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Mata Roma',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Matinha',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Matões',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Matões do Norte',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Milagres do Maranhão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Mirador',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Miranda do Norte',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Mirinzal',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Monção',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Montes Altos',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Morros',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Nina Rodrigues',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Nova Colinas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Nova Iorque',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Nova Olinda do Maranhão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Olho D´água Das Cunhãs',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Olinda Nova do Maranhão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Paço do Lumiar',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Palmeirândia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Paraibano',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Parnarama',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Passagem Franca',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Pastos Bons',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Paulino Neves',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Paulo Ramos',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Pedreiras',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Pedro do Rosário',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Penalva',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Peri Mirim',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Peritoró',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Pindaré-mirim',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Pinheiro',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Pio Xii',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Pirapemas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Poção de Pedras',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Porto Franco',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Porto Rico do Maranhão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Presidente Dutra',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Presidente Juscelino',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Presidente Médici',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Presidente Sarney',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Presidente Vargas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Primeira Cruz',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Raposa',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Riachão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Ribamar Fiquene',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Rosário',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Sambaíba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Santa Filomena do Maranhão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Santa Helena',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Santa Inês',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Santa Luzia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Santa Luzia do Paruá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Santa Quitéria do Maranhão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Santa Rita',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Santana do Maranhão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Santo Amaro do Maranhão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Santo Antônio Dos Lopes',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'São Benedito do Rio Preto',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'São Bento',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'São Bernardo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'São Domingos do Azeitão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'São Domingos do Maranhão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'São Félix de Balsas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'São Francisco do Brejão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'São Francisco do Maranhão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'São João Batista',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'São João do Carú',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'São João do Paraíso',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'São João do Soter',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'São João Dos Patos',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'São José de Ribamar',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'São José Dos Basílios',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'São Luís',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'São Luís Gonzaga do Maranhão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'São Mateus do Maranhão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'São Pedro da Água Branca',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'São Pedro Dos Crentes',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'São Raimundo Das Mangabeiras',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'São Raimundo do Doca Bezerra',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'São Roberto',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'São Vicente Ferrer',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Satubinha',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Senador Alexandre Costa',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Senador la Rocque',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Serrano do Maranhão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Sítio Novo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Sucupira do Norte',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Sucupira do Riachão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Tasso Fragoso',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Timbiras',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Timon',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Trizidela do Vale',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Tufilândia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Tuntum',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Turiaçu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Turilândia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Tutóia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Urbano Santos',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Vargem Grande',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Viana',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Vila Nova Dos Martírios',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Vitória do Mearim',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'Vitorino Freire',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MA',
                'name' => 'zé Doca',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Acauã',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Agricolândia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Água Branca',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Alagoinha do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Alegrete do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Alto Longá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Altos',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Alvorada do Gurguéia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Amarante',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Angical do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Anísio de Abreu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Antônio Almeida',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Aroazes',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Aroeiras do Itaim',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Arraial',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Assunção do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Avelino Lopes',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Baixa Grande do Ribeiro',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Barra D´alcântara',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Barras',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Barreiras do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Barro Duro',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Batalha',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Bela Vista do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Belém do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Beneditinos',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Bertolínia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Betânia do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Boa Hora',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Bocaina',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Bom Jesus',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Bom Princípio do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Bonfim do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Boqueirão do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Brasileira',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Brejo do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Buriti Dos Lopes',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Buriti Dos Montes',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Cabeceiras do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Cajazeiras do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Cajueiro da Praia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Caldeirão Grande do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Campinas do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Campo Alegre do Fidalgo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Campo Grande do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Campo Largo do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Campo Maior',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Canavieira',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Canto do Buriti',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Capitão de Campos',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Capitão Gervásio Oliveira',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Caracol',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Caraúbas do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Caridade do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Castelo do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Caxingó',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Cocal',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Cocal de Telha',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Cocal Dos Alves',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Coivaras',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Colônia do Gurguéia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Colônia do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Conceição do Canindé',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Coronel José Dias',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Corrente',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Cristalândia do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Cristino Castro',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Curimatá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Currais',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Curralinhos',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Curral Novo do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Demerval Lobão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Dirceu Arcoverde',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Dom Expedito Lopes',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Domingos Mourão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Dom Inocêncio',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Elesbão Veloso',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Eliseu Martins',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Esperantina',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Fartura do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Flores do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Floresta do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Floriano',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Francinópolis',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Francisco Ayres',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Francisco Macedo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Francisco Santos',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Fronteiras',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Geminiano',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Gilbués',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Guadalupe',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Guaribas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Hugo Napoleão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Ilha Grande',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Inhuma',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Ipiranga do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Isaías Coelho',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Itainópolis',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Itaueira',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Jacobina do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Jaicós',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Jardim do Mulato',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Jatobá do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Jerumenha',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'João Costa',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Joaquim Pires',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Joca Marques',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'José de Freitas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Juazeiro do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Júlio Borges',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Jurema',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Lagoinha do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Lagoa Alegre',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Lagoa do Barro do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Lagoa de São Francisco',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Lagoa do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Lagoa do Sítio',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Landri Sales',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Luís Correia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Luzilândia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Madeiro',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Manoel Emídio',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Marcolândia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Marcos Parente',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Massapê do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Matias Olímpio',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Miguel Alves',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Miguel Leão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Milton Brandão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Monsenhor Gil',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Monsenhor Hipólito',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Monte Alegre do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Morro Cabeça no Tempo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Morro do Chapéu do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Murici Dos Portelas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Nazaré do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Nazária',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Nossa Senhora de Nazaré',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Nossa Senhora Dos Remédios',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Novo Oriente do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Novo Santo Antônio',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Oeiras',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Olho D´água do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Padre Marcos',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Paes Landim',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Pajeú do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Palmeira do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Palmeirais',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Paquetá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Parnaguá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Parnaíba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Passagem Franca do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Patos do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Pau D´arco do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Paulistana',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Pavussu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Pedro ii',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Pedro Laurentino',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Nova Santa Rita',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Picos',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Pimenteiras',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Pio ix',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Piracuruca',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Piripiri',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Porto',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Porto Alegre do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Prata do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Queimada Nova',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Redenção do Gurguéia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Regeneração',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Riacho Frio',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Ribeira do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Ribeiro Gonçalves',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Rio Grande do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Santa Cruz do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Santa Cruz Dos Milagres',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Santa Filomena',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Santa Luz',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Santana do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Santa Rosa do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Santo Antônio de Lisboa',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Santo Antônio Dos Milagres',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Santo Inácio do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'São Braz do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'São Félix do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'São Francisco de Assis do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'São Francisco do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'São Gonçalo do Gurguéia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'São Gonçalo do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'São João da Canabrava',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'São João da Fronteira',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'São João da Serra',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'São João da Varjota',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'São João do Arraial',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'São João do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'São José do Divino',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'São José do Peixe',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'São José do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'São Julião',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'São Lourenço do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'São Luis do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'São Miguel da Baixa Grande',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'São Miguel do Fidalgo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'São Miguel do Tapuio',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'São Pedro do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'São Raimundo Nonato',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Sebastião Barros',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Sebastião Leal',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Sigefredo Pacheco',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Simões',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Simplício Mendes',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Socorro do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Sussuapara',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Tamboril do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Tanque do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Teresina',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'União',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Uruçuí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Valença do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Várzea Branca',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Várzea Grande',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Vera Mendes',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Vila Nova do Piauí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PI',
                'name' => 'Wall Ferraz',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Abaiara',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Acarapé',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Acaraú',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Acopiara',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Aiuaba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Alcântaras',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Altaneira',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Alto Santo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Amontada',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Antonina do Norte',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Apuiarés',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Aquiraz',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Aracati',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Aracoiaba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Ararendá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Araripe',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Aratuba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Arneiroz',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Assaré',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Aurora',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Baixio',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Banabuiú',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Barbalha',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Barreira',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Barro',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Barroquinha',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Baturité',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Beberibe',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Bela Cruz',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Boa Viagem',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Brejo Santo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Camocim',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Campos Sales',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Canindé',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Capistrano',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Caridade',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Cariré',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Caririaçu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Cariús',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Carnaubal',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Cascavel',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Catarina',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Catunda',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Caucaia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Cedro',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Chaval',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Choró',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Chorozinho',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Coreaú',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Crateús',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Crato',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Croatá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Cruz',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Deputado Irapuan Pinheiro',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Ererê',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Eusébio',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Farias Brito',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Forquilha',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Fortaleza',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Fortim',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Frecheirinha',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'General Sampaio',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Graça',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Granja',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Granjeiro',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Groaíras',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Guaiúba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Guaraciaba do Norte',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Guaramiranga',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Hidrolândia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Horizonte',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Ibaretama',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Ibiapina',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Ibicuitinga',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Icapuí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Icó',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Iguatu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Independência',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Ipaporanga',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Ipaumirim',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Ipu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Ipueiras',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Iracema',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Irauçuba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Itaiçaba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Itaitinga',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Itapagé',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Itapipoca',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Itapiúna',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Itarema',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Itatira',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Jaguaretama',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Jaguaribara',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Jaguaribe',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Jaguaruana',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Jardim',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Jati',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Jijoca de Jericoacoara',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Juazeiro do Norte',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Jucás',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Lavras da Mangabeira',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Limoeiro do Norte',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Madalena',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Maracanaú',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Maranguape',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Marco',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Martinópole',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Massapê',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Mauriti',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Meruoca',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Milagres',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Milhã',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Miraíma',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Missão Velha',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Mombaça',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Monsenhor Tabosa',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Morada Nova',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Moraújo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Morrinhos',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Mucambo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Mulungu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Nova Olinda',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Nova Russas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Novo Oriente',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Ocara',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Orós',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Pacajus',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Pacatuba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Pacoti',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Pacujá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Palhano',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Palmácia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Paracuru',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Paraipaba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Parambu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Paramoti',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Pedra Branca',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Penaforte',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Pentecoste',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Pereiro',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Pindoretama',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Piquet Carneiro',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Pires Ferreira',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Poranga',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Porteiras',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Potengi',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Potiretama',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Quiterianópolis',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Quixadá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Quixelô',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Quixeramobim',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Quixeré',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Redenção',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Reriutaba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Russas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Saboeiro',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Salitre',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Santana do Acaraú',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Santana do Cariri',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Santa Quitéria',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'São Benedito',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'São Gonçalo do Amarante',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'São João do Jaguaribe',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'São Luís do Curu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Senador Pompeu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Senador sá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Sobral',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Solonópole',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Tabuleiro do Norte',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Tamboril',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Tarrafas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Tauá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Tejuçuoca',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Tianguá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Trairi',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Tururu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Ubajara',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Umari',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Umirim',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Uruburetama',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Uruoca',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Varjota',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Várzea Alegre',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'CE',
                'name' => 'Viçosa do Ceará',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Acari',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Açu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Afonso Bezerra',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Água Nova',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Alexandria',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Almino Afonso',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Alto do Rodrigues',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Angicos',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Antônio Martins',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Apodi',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Areia Branca',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Arês',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Augusto Severo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Baía Formosa',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Baraúna',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Barcelona',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Bento Fernandes',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Bodó',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Bom Jesus',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Brejinho',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Caiçara do Norte',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Caiçara do Rio do Vento',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Caicó',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Campo Redondo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Canguaretama',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Caraúbas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Carnaúba Dos Dantas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Carnaubais',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Ceará-mirim',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Cerro Corá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Coronel Ezequiel',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Coronel João Pessoa',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Cruzeta',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Currais Novos',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Doutor Severiano',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Parnamirim',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Encanto',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Equador',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Espírito Santo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Extremoz',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Felipe Guerra',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Fernando Pedroza',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Florânia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Francisco Dantas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Frutuoso Gomes',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Galinhos',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Goianinha',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Governador Dix-sept Rosado',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Grossos',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Guamaré',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Ielmo Marinho',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Ipanguaçu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Ipueira',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Itajá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Itaú',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Jaçanã',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Jandaíra',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Janduís',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Januário Cicco',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Japi',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Jardim de Angicos',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Jardim de Piranhas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Jardim do Seridó',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'João Câmara',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'João Dias',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'José da Penha',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Jucurutu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Jundiá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Lagoa D´anta',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Lagoa de Pedras',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Lagoa de Velhos',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Lagoa Nova',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Lagoa Salgada',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Lajes',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Lajes Pintadas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Lucrécia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Luís Gomes',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Macaíba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Macau',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Major Sales',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Marcelino Vieira',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Martins',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Maxaranguape',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Messias Targino',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Montanhas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Monte Alegre',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Monte Das Gameleiras',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Mossoró',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Natal',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Nísia Floresta',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Nova Cruz',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Olho-d´água do Borges',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Ouro Branco',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Paraná',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Paraú',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Parazinho',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Parelhas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Rio do Fogo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Passa e Fica',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Passagem',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Patu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Santa Maria',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Pau Dos Ferros',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Pedra Grande',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Pedra Preta',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Pedro Avelino',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Pedro Velho',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Pendências',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Pilões',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Poço Branco',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Portalegre',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Porto do Mangue',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Presidente Juscelino',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Pureza',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Rafael Fernandes',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Rafael Godeiro',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Riacho da Cruz',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Riacho de Santana',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Riachuelo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Rodolfo Fernandes',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Tibau',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Ruy Barbosa',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Santa Cruz',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Santana do Matos',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Santana do Seridó',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Santo Antônio',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'São Bento do Norte',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'São Bento do Trairí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'São Fernando',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'São Francisco do Oeste',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'São Gonçalo do Amarante',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'São João do Sabugi',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'São José de Mipibu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'São José do Campestre',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'São José do Seridó',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'São Miguel',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'São Miguel do Gostoso',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'São Paulo do Potengi',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'São Pedro',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'São Rafael',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'São Tomé',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'São Vicente',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Senador Elói de Souza',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Senador Georgino Avelino',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Serra de São Bento',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Serra do Mel',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Serra Negra do Norte',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Serrinha',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Serrinha Dos Pintos',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Severiano Melo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Sítio Novo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Taboleiro Grande',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Taipu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Tangará',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Tenente Ananias',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Tenente Laurentino Cruz',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Tibau do Sul',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Timbaúba Dos Batistas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Touros',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Triunfo Potiguar',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Umarizal',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Upanema',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Várzea',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Venha-ver',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Vera Cruz',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Viçosa',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'RN',
                'name' => 'Vila Flor',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Água Branca',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Aguiar',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Alagoa Grande',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Alagoa Nova',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Alagoinha',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Alcantil',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Algodão de Jandaíra',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Alhandra',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'São João do Rio do Peixe',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Amparo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Aparecida',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Araçagi',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Arara',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Araruna',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Areia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Areia de Baraúnas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Areial',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Aroeiras',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Assunção',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Baía da Traição',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Bananeiras',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Baraúna',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Barra de Santana',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Barra de Santa Rosa',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Barra de São Miguel',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Bayeux',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Belém',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Belém do Brejo do Cruz',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Bernardino Batista',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Boa Ventura',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Boa Vista',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Bom Jesus',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Bom Sucesso',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Bonito de Santa fé',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Boqueirão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Igaracy',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Borborema',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Brejo do Cruz',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Brejo Dos Santos',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Caaporã',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Cabaceiras',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Cabedelo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Cachoeira Dos Índios',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Cacimba de Areia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Cacimba de Dentro',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Cacimbas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Caiçara',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Cajazeiras',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Cajazeirinhas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Caldas Brandão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Camalaú',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Campina Grande',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Capim',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Caraúbas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Carrapateira',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Casserengue',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Catingueira',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Catolé do Rocha',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Caturité',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Conceição',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Condado',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Conde',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Congo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Coremas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Coxixola',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Cruz do Espírito Santo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Cubati',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Cuité',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Cuitegi',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Cuité de Mamanguape',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Curral de Cima',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Curral Velho',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Damião',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Desterro',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Vista Serrana',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Diamante',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Dona Inês',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Duas Estradas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Emas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Esperança',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Fagundes',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Frei Martinho',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Gado Bravo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Guarabira',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Gurinhém',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Gurjão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Ibiara',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Imaculada',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Ingá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Itabaiana',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Itaporanga',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Itapororoca',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Itatuba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Jacaraú',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Jericó',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'João Pessoa',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Juarez Távora',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Juazeirinho',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Junco do Seridó',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Juripiranga',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Juru',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Lagoa',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Lagoa de Dentro',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Lagoa Seca',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Lastro',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Livramento',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Logradouro',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Lucena',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Mãe D´água',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Malta',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Mamanguape',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Manaíra',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Marcação',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Mari',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Marizópolis',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Massaranduba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Mataraca',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Matinhas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Mato Grosso',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Maturéia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Mogeiro',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Montadas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Monte Horebe',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Monteiro',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Mulungu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Natuba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Nazarezinho',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Nova Floresta',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Nova Olinda',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Nova Palmeira',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Olho D´água',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Olivedos',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Ouro Velho',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Parari',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Passagem',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Patos',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Paulista',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Pedra Branca',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Pedra Lavrada',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Pedras de Fogo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Piancó',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Picuí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Pilar',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Pilões',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Pilõezinhos',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Pirpirituba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Pitimbu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Pocinhos',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Poço Dantas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Poço de José de Moura',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Pombal',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Prata',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Princesa Isabel',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Puxinanã',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Queimadas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Quixabá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Remígio',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Pedro Régis',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Riachão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Riachão do Bacamarte',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Riachão do Poço',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Riacho de Santo Antônio',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Riacho Dos Cavalos',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Rio Tinto',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Salgadinho',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Salgado de São Félix',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Santa Cecília',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Santa Cruz',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Santa Helena',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Santa Inês',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Santa Luzia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Santana de Mangueira',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Santana Dos Garrotes',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Santarém',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Santa Rita',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Santa Teresinha',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Santo André',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'São Bento',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'São Bentinho',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'São Domingos do Cariri',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'São Domingos de Pombal',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'São Francisco',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'São João do Cariri',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'São João do Tigre',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'São José da Lagoa Tapada',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'São José de Caiana',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'São José de Espinharas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'São José Dos Ramos',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'São José de Piranhas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'São José de Princesa',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'São José do Bonfim',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'São José do Brejo do Cruz',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'São José do Sabugi',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'São José Dos Cordeiros',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'São Mamede',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'São Miguel de Taipu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'São Sebastião de Lagoa de Roça',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'São Sebastião do Umbuzeiro',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Sapé',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Seridó',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Serra Branca',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Serra da Raiz',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Serra Grande',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Serra Redonda',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Serraria',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Sertãozinho',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Sobrado',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Solânea',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Soledade',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Sossêgo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Sousa',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Sumé',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Campo de Santana',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Taperoá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Tavares',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Teixeira',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Tenório',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Triunfo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Uiraúna',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Umbuzeiro',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Várzea',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Vieirópolis',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PB',
                'name' => 'Zabelê',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Abreu e Lima',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Afogados da Ingazeira',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Afrânio',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Agrestina',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Água Preta',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Águas Belas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Alagoinha',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Aliança',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Altinho',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Amaraji',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Angelim',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Araçoiaba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Araripina',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Arcoverde',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Barra de Guabiraba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Barreiros',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Belém de Maria',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Belém de São Francisco',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Belo Jardim',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Betânia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Bezerros',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Bodocó',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Bom Conselho',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Bom Jardim',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Bonito',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Brejão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Brejinho',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Brejo da Madre de Deus',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Buenos Aires',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Buíque',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Cabo de Santo Agostinho',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Cabrobó',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Cachoeirinha',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Caetés',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Calçado',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Calumbi',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Camaragibe',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Camocim de São Félix',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Camutanga',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Canhotinho',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Capoeiras',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Carnaíba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Carnaubeira da Penha',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Carpina',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Caruaru',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Casinhas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Catende',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Cedro',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Chã de Alegria',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Chã Grande',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Condado',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Correntes',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Cortês',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Cumaru',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Cupira',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Custódia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Dormentes',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Escada',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Exu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Feira Nova',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Fernando de Noronha',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Ferreiros',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Flores',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Floresta',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Frei Miguelinho',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Gameleira',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Garanhuns',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Glória do Goitá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Goiana',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Granito',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Gravatá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Iati',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Ibimirim',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Ibirajuba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Igarassu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Iguaraci',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Inajá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Ingazeira',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Ipojuca',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Ipubi',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Itacuruba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Itaíba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Ilha de Itamaracá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Itambé',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Itapetim',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Itapissuma',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Itaquitinga',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Jaboatão Dos Guararapes',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Jaqueira',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Jataúba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Jatobá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'João Alfredo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Joaquim Nabuco',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Jucati',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Jupi',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Jurema',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Lagoa do Carro',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Lagoa do Itaenga',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Lagoa do Ouro',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Lagoa Dos Gatos',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Lagoa Grande',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Lajedo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Limoeiro',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Macaparana',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Machados',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Manari',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Maraial',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Mirandiba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Moreno',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Nazaré da Mata',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Olinda',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Orobó',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Orocó',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Ouricuri',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Palmares',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Palmeirina',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Panelas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Paranatama',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Parnamirim',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Passira',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Paudalho',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Paulista',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Pedra',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Pesqueira',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Petrolândia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Petrolina',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Poção',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Pombos',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Primavera',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Quipapá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Quixaba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Recife',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Riacho Das Almas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Ribeirão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Rio Formoso',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Sairé',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Salgadinho',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Salgueiro',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Saloá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Sanharó',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Santa Cruz',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Santa Cruz da Baixa Verde',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Santa Cruz do Capibaribe',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Santa Filomena',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Santa Maria da Boa Vista',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Santa Maria do Cambucá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Santa Terezinha',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'São Benedito do Sul',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'São Bento do Una',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'São Caitano',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'São João',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'São Joaquim do Monte',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'São José da Coroa Grande',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'São José do Belmonte',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'São José do Egito',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'São Lourenço da Mata',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'São Vicente Ferrer',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Serra Talhada',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Serrita',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Sertânia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Sirinhaém',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Moreilândia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Solidão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Surubim',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Tabira',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Tacaimbó',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Tacaratu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Tamandaré',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Taquaritinga do Norte',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Terezinha',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Terra Nova',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Timbaúba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Toritama',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Tracunhaém',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Trindade',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Triunfo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Tupanatinga',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Tuparetama',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Venturosa',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Verdejante',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Vertente do Lério',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Vertentes',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Vicência',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Vitória de Santo Antão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'PE',
                'name' => 'Xexéu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Água Branca',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Anadia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Arapiraca',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Atalaia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Barra de Santo Antônio',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Barra de São Miguel',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Batalha',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Belém',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Belo Monte',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Boca da Mata',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Branquinha',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Cacimbinhas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Cajueiro',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Campestre',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Campo Alegre',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Campo Grande',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Canapi',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Capela',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Carneiros',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Chã Preta',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Coité do Nóia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Colônia Leopoldina',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Coqueiro Seco',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Coruripe',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Craíbas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Delmiro Gouveia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Dois Riachos',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Estrela de Alagoas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Feira Grande',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Feliz Deserto',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Flexeiras',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Girau do Ponciano',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Ibateguara',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Igaci',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Igreja Nova',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Inhapi',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Jacaré Dos Homens',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Jacuípe',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Japaratinga',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Jaramataia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Jequiá da Praia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Joaquim Gomes',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Jundiá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Junqueiro',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Lagoa da Canoa',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Limoeiro de Anadia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Maceió',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Major Isidoro',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Maragogi',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Maravilha',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Marechal Deodoro',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Maribondo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Mar Vermelho',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Mata Grande',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Matriz de Camaragibe',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Messias',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Minador do Negrão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Monteirópolis',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Murici',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Novo Lino',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Olho D´água Das Flores',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Olho D´água do Casado',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Olho D´água Grande',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Olivença',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Ouro Branco',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Palestina',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Palmeira Dos Índios',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Pão de Açúcar',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Pariconha',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Paripueira',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Passo de Camaragibe',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Paulo Jacinto',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Penedo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Piaçabuçu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Pilar',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Pindoba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Piranhas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Poço Das Trincheiras',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Porto Calvo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Porto de Pedras',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Porto Real do Colégio',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Quebrangulo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Rio Largo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Roteiro',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Santa Luzia do Norte',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Santana do Ipanema',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Santana do Mundaú',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'São Brás',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'São José da Laje',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'São José da Tapera',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'São Luís do Quitunde',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'São Miguel Dos Campos',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'São Miguel Dos Milagres',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'São Sebastião',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Satuba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Senador Rui Palmeira',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Tanque D´arca',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Taquarana',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Teotônio Vilela',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Traipu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'União Dos Palmares',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'AL',
                'name' => 'Viçosa',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Amparo de São Francisco',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Aquidabã',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Aracaju',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Arauá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Areia Branca',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Barra Dos Coqueiros',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Boquim',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Brejo Grande',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Campo do Brito',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Canhoba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Canindé de São Francisco',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Capela',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Carira',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Carmópolis',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Cedro de São João',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Cristinápolis',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Cumbe',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Divina Pastora',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Estância',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Feira Nova',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Frei Paulo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Gararu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'General Maynard',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Gracho Cardoso',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Ilha Das Flores',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Indiaroba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Itabaiana',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Itabaianinha',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Itabi',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Itaporanga D´ajuda',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Japaratuba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Japoatã',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Lagarto',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Laranjeiras',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Macambira',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Malhada Dos Bois',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Malhador',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Maruim',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Moita Bonita',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Monte Alegre de Sergipe',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Muribeca',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Neópolis',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Nossa Senhora Aparecida',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Nossa Senhora da Glória',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Nossa Senhora Das Dores',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Nossa Senhora de Lourdes',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Nossa Senhora do Socorro',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Pacatuba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Pedra Mole',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Pedrinhas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Pinhão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Pirambu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Poço Redondo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Poço Verde',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Porto da Folha',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Propriá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Riachão do Dantas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Riachuelo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Ribeirópolis',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Rosário do Catete',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Salgado',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Santa Luzia do Itanhy',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Santana do São Francisco',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Santa Rosa de Lima',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Santo Amaro Das Brotas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'São Cristóvão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'São Domingos',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'São Francisco',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'São Miguel do Aleixo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Simão Dias',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Siriri',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Telha',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Tobias Barreto',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Tomar do Geru',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'SE',
                'name' => 'Umbaúba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Abaíra',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Abaré',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Acajutiba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Adustina',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Água Fria',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Érico Cardoso',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Aiquara',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Alagoinhas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Alcobaça',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Almadina',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Amargosa',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Amélia Rodrigues',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'América Dourada',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Anagé',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Andaraí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Andorinha',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Angical',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Anguera',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Antas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Antônio Cardoso',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Antônio Gonçalves',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Aporá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Apuarema',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Aracatu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Araças',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Araci',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Aramari',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Arataca',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Aratuípe',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Aurelino Leal',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Baianópolis',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Baixa Grande',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Banzaê',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Barra',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Barra da Estiva',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Barra do Choça',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Barra do Mendes',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Barra do Rocha',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Barreiras',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Barro Alto',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Barrocas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Governador Lomanto Júnior',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Belmonte',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Belo Campo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Biritinga',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Boa Nova',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Boa Vista do Tupim',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Bom Jesus da Lapa',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Bom Jesus da Serra',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Boninal',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Bonito',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Boquira',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Botuporã',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Brejões',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Brejolândia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Brotas de Macaúbas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Brumado',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Buerarema',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Buritirama',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Caatiba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Cabaceiras do Paraguaçu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Cachoeira',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Caculé',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Caém',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Caetanos',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Caetité',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Cafarnaum',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Cairu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Caldeirão Grande',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Camacan',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Camaçari',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Camamu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Campo Alegre de Lourdes',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Campo Formoso',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Canápolis',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Canarana',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Canavieiras',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Candeal',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Candeias',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Candiba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Cândido Sales',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Cansanção',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Canudos',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Capela do Alto Alegre',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Capim Grosso',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Caraíbas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Caravelas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Cardeal da Silva',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Carinhanha',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Casa Nova',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Castro Alves',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Catolândia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Catu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Caturama',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Central',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Chorrochó',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Cícero Dantas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Cipó',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Coaraci',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Cocos',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Conceição da Feira',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Conceição do Almeida',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Conceição do Coité',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Conceição do Jacuípe',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Conde',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Condeúba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Contendas do Sincorá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Coração de Maria',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Cordeiros',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Coribe',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Coronel João sá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Correntina',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Cotegipe',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Cravolândia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Crisópolis',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Cristópolis',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Cruz Das Almas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Curaçá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Dário Meira',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Dias D´ávila',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Dom Basílio',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Dom Macedo Costa',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Elísio Medrado',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Encruzilhada',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Entre Rios',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Esplanada',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Euclides da Cunha',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Eunápolis',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Fátima',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Feira da Mata',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Feira de Santana',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Filadélfia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Firmino Alves',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Floresta Azul',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Formosa do Rio Preto',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Gandu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Gavião',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Gentio do Ouro',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Glória',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Gongogi',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Governador Mangabeira',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Guajeru',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Guanambi',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Guaratinga',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Heliópolis',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Iaçu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Ibiassucê',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Ibicaraí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Ibicoara',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Ibicuí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Ibipeba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Ibipitanga',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Ibiquera',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Ibirapitanga',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Ibirapuã',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Ibirataia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Ibitiara',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Ibititá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Ibotirama',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Ichu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Igaporã',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Igrapiúna',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Iguaí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Ilhéus',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Inhambupe',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Ipecaetá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Ipiaú',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Ipirá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Ipupiara',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Irajuba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Iramaia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Iraquara',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Irará',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Irecê',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Itabela',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Itaberaba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Itabuna',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Itacaré',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Itaeté',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Itagi',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Itagibá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Itagimirim',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Itaguaçu da Bahia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Itaju do Colônia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Itajuípe',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Itamaraju',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Itamari',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Itambé',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Itanagra',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Itanhém',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Itaparica',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Itapé',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Itapebi',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Itapetinga',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Itapicuru',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Itapitanga',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Itaquara',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Itarantim',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Itatim',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Itiruçu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Itiúba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Itororó',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Ituaçu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Ituberá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Iuiú',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Jaborandi',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Jacaraci',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Jacobina',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Jaguaquara',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Jaguarari',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Jaguaripe',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Jandaíra',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Jequié',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Jeremoabo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Jiquiriçá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Jitaúna',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'João Dourado',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Juazeiro',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Jucuruçu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Jussara',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Jussari',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Jussiape',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Lafaiete Coutinho',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Lagoa Real',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Laje',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Lajedão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Lajedinho',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Lajedo do Tabocal',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Lamarão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Lapão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Lauro de Freitas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Lençóis',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Licínio de Almeida',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Livramento de Nossa Senhora',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Luís Eduardo Magalhães',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Macajuba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Macarani',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Macaúbas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Macururé',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Madre de Deus',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Maetinga',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Maiquinique',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Mairi',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Malhada',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Malhada de Pedras',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Manoel Vitorino',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Mansidão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Maracás',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Maragogipe',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Maraú',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Marcionílio Souza',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Mascote',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Mata de São João',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Matina',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Medeiros Neto',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Miguel Calmon',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Milagres',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Mirangaba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Mirante',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Monte Santo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Morpará',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Morro do Chapéu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Mortugaba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Mucugê',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Mucuri',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Mulungu do Morro',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Mundo Novo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Muniz Ferreira',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Muquém de São Francisco',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Muritiba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Mutuípe',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Nazaré',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Nilo Peçanha',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Nordestina',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Nova Canaã',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Nova Fátima',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Nova Ibiá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Nova Itarana',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Nova Redenção',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Nova Soure',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Nova Viçosa',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Novo Horizonte',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Novo Triunfo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Olindina',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Oliveira Dos Brejinhos',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Ouriçangas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Ourolândia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Palmas de Monte Alto',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Palmeiras',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Paramirim',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Paratinga',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Paripiranga',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Pau Brasil',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Paulo Afonso',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'pé de Serra',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Pedrão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Pedro Alexandre',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Piatã',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Pilão Arcado',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Pindaí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Pindobaçu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Pintadas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Piraí do Norte',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Piripá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Piritiba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Planaltino',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Planalto',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Poções',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Pojuca',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Ponto Novo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Porto Seguro',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Potiraguá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Prado',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Presidente Dutra',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Presidente Jânio Quadros',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Presidente Tancredo Neves',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Queimadas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Quijingue',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Quixabeira',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Rafael Jambeiro',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Remanso',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Retirolândia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Riachão Das Neves',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Riachão do Jacuípe',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Riacho de Santana',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Ribeira do Amparo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Ribeira do Pombal',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Ribeirão do Largo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Rio de Contas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Rio do Antônio',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Rio do Pires',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Rio Real',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Rodelas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Ruy Barbosa',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Salinas da Margarida',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Salvador',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Santa Bárbara',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Santa Brígida',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Santa Cruz Cabrália',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Santa Cruz da Vitória',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Santa Inês',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Santaluz',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Santa Luzia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Santa Maria da Vitória',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Santana',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Santanópolis',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Santa Rita de Cássia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Santa Teresinha',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Santo Amaro',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Santo Antônio de Jesus',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Santo Estêvão',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'São Desidério',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'São Domingos',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'São Félix',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'São Félix do Coribe',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'São Felipe',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'São Francisco do Conde',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'São Gabriel',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'São Gonçalo Dos Campos',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'São José da Vitória',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'São José do Jacuípe',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'São Miguel Das Matas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'São Sebastião do Passé',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Sapeaçu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Sátiro Dias',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Saubara',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Saúde',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Seabra',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Sebastião Laranjeiras',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Senhor do Bonfim',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Serra do Ramalho',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Sento sé',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Serra Dourada',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Serra Preta',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Serrinha',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Serrolândia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Simões Filho',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Sítio do Mato',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Sítio do Quinto',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Sobradinho',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Souto Soares',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Tabocas do Brejo Velho',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Tanhaçu',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Tanque Novo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Tanquinho',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Taperoá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Tapiramutá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Teixeira de Freitas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Teodoro Sampaio',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Teofilândia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Teolândia',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Terra Nova',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Tremedal',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Tucano',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Uauá',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Ubaíra',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Ubaitaba',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Ubatã',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Uibaí',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Umburanas',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Una',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Urandi',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Uruçuca',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Utinga',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Valença',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Valente',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Várzea da Roça',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Várzea do Poço',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Várzea Nova',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Varzedo',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Vera Cruz',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Vereda',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Vitória da Conquista',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Wagner',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Wanderley',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Wenceslau Guimarães',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'BA',
                'name' => 'Xique-xique',
                'region' => 'Região Nordeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Abadia Dos Dourados',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Abaeté',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Abre Campo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Acaiaca',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Açucena',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Água Boa',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Água Comprida',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Aguanil',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Águas Formosas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Águas Vermelhas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Aimorés',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Aiuruoca',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Alagoa',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Albertina',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Além Paraíba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Alfenas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Alfredo Vasconcelos',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Almenara',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Alpercata',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Alpinópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Alterosa',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Alto Caparaó',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Alto Rio Doce',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Alvarenga',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Alvinópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Alvorada de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Amparo do Serra',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Andradas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Cachoeira de Pajeú',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Andrelândia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Angelândia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Antônio Carlos',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Antônio Dias',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Antônio Prado de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Araçaí',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Aracitaba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Araçuaí',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Araguari',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Arantina',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Araponga',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Araporã',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Arapuá',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Araújos',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Araxá',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Arceburgo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Arcos',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Areado',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Argirita',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Aricanduva',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Arinos',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Astolfo Dutra',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Ataléia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Augusto de Lima',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Baependi',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Baldim',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Bambuí',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Bandeira',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Bandeira do Sul',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Barão de Cocais',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Barão de Monte Alto',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Barbacena',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Barra Longa',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Barroso',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Bela Vista de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Belmiro Braga',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Belo Horizonte',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Belo Oriente',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Belo Vale',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Berilo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Bertópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Berizal',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Betim',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Bias Fortes',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Bicas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Biquinhas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Boa Esperança',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Bocaina de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Bocaiúva',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Bom Despacho',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Bom Jardim de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Bom Jesus da Penha',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Bom Jesus do Amparo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Bom Jesus do Galho',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Bom Repouso',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Bom Sucesso',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Bonfim',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Bonfinópolis de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Bonito de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Borda da Mata',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Botelhos',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Botumirim',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Brasilândia de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Brasília de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Brás Pires',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Braúnas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Brasópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Brumadinho',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Bueno Brandão',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Buenópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Bugre',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Buritis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Buritizeiro',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Cabeceira Grande',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Cabo Verde',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Cachoeira da Prata',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Cachoeira de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Cachoeira Dourada',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Caetanópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Caeté',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Caiana',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Cajuri',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Caldas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Camacho',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Camanducaia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Cambuí',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Cambuquira',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Campanário',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Campanha',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Campestre',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Campina Verde',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Campo Azul',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Campo Belo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Campo do Meio',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Campo Florido',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Campos Altos',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Campos Gerais',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Canaã',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Canápolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Cana Verde',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Candeias',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Cantagalo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Caparaó',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Capela Nova',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Capelinha',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Capetinga',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Capim Branco',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Capinópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Capitão Andrade',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Capitão Enéas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Capitólio',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Caputira',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Caraí',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Caranaíba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Carandaí',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Carangola',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Caratinga',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Carbonita',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Careaçu',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Carlos Chagas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Carmésia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Carmo da Cachoeira',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Carmo da Mata',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Carmo de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Carmo do Cajuru',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Carmo do Paranaíba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Carmo do Rio Claro',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Carmópolis de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Carneirinho',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Carrancas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Carvalhópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Carvalhos',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Casa Grande',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Cascalho Rico',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Cássia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Conceição da Barra de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Cataguases',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Catas Altas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Catas Altas da Noruega',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Catuji',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Catuti',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Caxambu',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Cedro do Abaeté',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Central de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Centralina',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Chácara',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Chalé',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Chapada do Norte',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Chapada Gaúcha',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Chiador',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Cipotânea',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Claraval',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Claro Dos Poções',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Cláudio',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Coimbra',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Coluna',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Comendador Gomes',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Comercinho',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Conceição da Aparecida',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Conceição Das Pedras',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Conceição Das Alagoas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Conceição de Ipanema',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Conceição do Mato Dentro',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Conceição do Pará',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Conceição do Rio Verde',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Conceição Dos Ouros',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Cônego Marinho',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Confins',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Congonhal',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Congonhas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Congonhas do Norte',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Conquista',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Conselheiro Lafaiete',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Conselheiro Pena',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Consolação',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Contagem',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Coqueiral',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Coração de Jesus',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Cordisburgo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Cordislândia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Corinto',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Coroaci',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Coromandel',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Coronel Fabriciano',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Coronel Murta',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Coronel Pacheco',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Coronel Xavier Chaves',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Córrego Danta',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Córrego do Bom Jesus',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Córrego Fundo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Córrego Novo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Couto de Magalhães de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Crisólita',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Cristais',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Cristália',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Cristiano Otoni',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Cristina',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Crucilândia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Cruzeiro da Fortaleza',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Cruzília',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Cuparaque',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Curral de Dentro',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Curvelo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Datas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Delfim Moreira',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Delfinópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Delta',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Descoberto',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Desterro de Entre Rios',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Desterro do Melo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Diamantina',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Diogo de Vasconcelos',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Dionísio',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Divinésia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Divino',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Divino Das Laranjeiras',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Divinolândia de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Divinópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Divisa Alegre',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Divisa Nova',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Divisópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Dom Bosco',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Dom Cavati',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Dom Joaquim',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Dom Silvério',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Dom Viçoso',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Dona Eusébia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Dores de Campos',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Dores de Guanhães',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Dores do Indaiá',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Dores do Turvo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Doresópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Douradoquara',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Durandé',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Elói Mendes',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Engenheiro Caldas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Engenheiro Navarro',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Entre Folhas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Entre Rios de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Ervália',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Esmeraldas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Espera Feliz',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Espinosa',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Espírito Santo do Dourado',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Estiva',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Estrela Dalva',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Estrela do Indaiá',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Estrela do Sul',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Eugenópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Ewbank da Câmara',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Extrema',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Fama',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Faria Lemos',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Felício Dos Santos',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São Gonçalo do Rio Preto',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Felisburgo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Felixlândia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Fernandes Tourinho',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Ferros',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Fervedouro',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Florestal',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Formiga',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Formoso',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Fortaleza de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Fortuna de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Francisco Badaró',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Francisco Dumont',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Francisco sá',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Franciscópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Frei Gaspar',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Frei Inocêncio',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Frei Lagonegro',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Fronteira',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Fronteira Dos Vales',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Fruta de Leite',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Frutal',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Funilândia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Galiléia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Gameleiras',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Glaucilândia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Goiabeira',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Goianá',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Gonçalves',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Gonzaga',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Gouveia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Governador Valadares',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Grão Mogol',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Grupiara',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Guanhães',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Guapé',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Guaraciaba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Guaraciama',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Guaranésia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Guarani',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Guarará',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Guarda-mor',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Guaxupé',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Guidoval',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Guimarânia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Guiricema',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Gurinhatã',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Heliodora',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Iapu',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Ibertioga',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Ibiá',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Ibiaí',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Ibiracatu',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Ibiraci',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Ibirité',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Ibitiúra de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Ibituruna',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Icaraí de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Igarapé',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Igaratinga',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Iguatama',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Ijaci',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Ilicínea',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Imbé de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Inconfidentes',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Indaiabira',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Indianópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Ingaí',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Inhapim',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Inhaúma',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Inimutaba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Ipaba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Ipanema',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Ipatinga',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Ipiaçu',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Ipuiúna',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Iraí de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Itabira',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Itabirinha',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Itabirito',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Itacambira',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Itacarambi',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Itaguara',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Itaipé',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Itajubá',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Itamarandiba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Itamarati de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Itambacuri',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Itambé do Mato Dentro',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Itamogi',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Itamonte',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Itanhandu',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Itanhomi',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Itaobim',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Itapagipe',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Itapecerica',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Itapeva',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Itatiaiuçu',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Itaú de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Itaúna',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Itaverava',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Itinga',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Itueta',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Ituiutaba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Itumirim',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Iturama',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Itutinga',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Jaboticatubas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Jacinto',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Jacuí',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Jacutinga',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Jaguaraçu',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Jaíba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Jampruca',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Janaúba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Januária',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Japaraíba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Japonvar',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Jeceaba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Jenipapo de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Jequeri',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Jequitaí',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Jequitibá',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Jequitinhonha',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Jesuânia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Joaíma',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Joanésia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'João Monlevade',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'João Pinheiro',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Joaquim Felício',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Jordânia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'José Gonçalves de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'José Raydan',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Josenópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Nova União',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Juatuba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Juiz de Fora',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Juramento',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Juruaia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Juvenília',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Ladainha',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Lagamar',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Lagoa da Prata',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Lagoa Dos Patos',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Lagoa Dourada',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Lagoa Formosa',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Lagoa Grande',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Lagoa Santa',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Lajinha',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Lambari',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Lamim',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Laranjal',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Lassance',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Lavras',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Leandro Ferreira',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Leme do Prado',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Leopoldina',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Liberdade',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Lima Duarte',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Limeira do Oeste',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Lontra',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Luisburgo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Luislândia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Luminárias',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Luz',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Machacalis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Machado',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Madre de Deus de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Malacacheta',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Mamonas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Manga',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Manhuaçu',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Manhumirim',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Mantena',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Maravilhas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Mar de Espanha',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Maria da fé',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Mariana',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Marilac',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Mário Campos',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Maripá de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Marliéria',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Marmelópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Martinho Campos',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Martins Soares',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Mata Verde',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Materlândia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Mateus Leme',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Matias Barbosa',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Matias Cardoso',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Matipó',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Mato Verde',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Matozinhos',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Matutina',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Medeiros',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Medina',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Mendes Pimentel',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Mercês',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Mesquita',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Minas Novas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Minduri',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Mirabela',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Miradouro',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Miraí',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Miravânia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Moeda',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Moema',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Monjolos',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Monsenhor Paulo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Montalvânia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Monte Alegre de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Monte Azul',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Monte Belo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Monte Carmelo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Monte Formoso',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Monte Santo de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Montes Claros',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Monte Sião',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Montezuma',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Morada Nova de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Morro da Garça',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Morro do Pilar',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Munhoz',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Muriaé',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Mutum',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Muzambinho',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Nacip Raydan',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Nanuque',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Naque',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Natalândia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Natércia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Nazareno',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Nepomuceno',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Ninheira',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Nova Belém',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Nova Era',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Nova Lima',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Nova Módica',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Nova Ponte',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Nova Porteirinha',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Nova Resende',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Nova Serrana',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Novo Cruzeiro',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Novo Oriente de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Novorizonte',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Olaria',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Olhos-d´água',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Olímpio Noronha',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Oliveira',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Oliveira Fortes',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Onça de Pitangui',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Oratórios',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Orizânia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Ouro Branco',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Ouro Fino',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Ouro Preto',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Ouro Verde de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Padre Carvalho',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Padre Paraíso',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Paineiras',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Pains',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Pai Pedro',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Paiva',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Palma',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Palmópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Papagaios',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Paracatu',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Pará de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Paraguaçu',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Paraisópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Paraopeba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Passabém',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Passa Quatro',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Passa Tempo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Passa-vinte',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Passos',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Patis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Patos de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Patrocínio',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Patrocínio do Muriaé',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Paula Cândido',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Paulistas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Pavão',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Peçanha',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Pedra Azul',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Pedra Bonita',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Pedra do Anta',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Pedra do Indaiá',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Pedra Dourada',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Pedralva',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Pedras de Maria da Cruz',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Pedrinópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Pedro Leopoldo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Pedro Teixeira',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Pequeri',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Pequi',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Perdigão',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Perdizes',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Perdões',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Periquito',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Pescador',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Piau',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Piedade de Caratinga',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Piedade de Ponte Nova',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Piedade do Rio Grande',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Piedade Dos Gerais',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Pimenta',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Pingo-d´água',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Pintópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Piracema',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Pirajuba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Piranga',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Piranguçu',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Piranguinho',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Pirapetinga',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Pirapora',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Piraúba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Pitangui',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Piumhi',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Planura',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Poço Fundo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Poços de Caldas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Pocrane',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Pompéu',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Ponte Nova',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Ponto Chique',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Ponto Dos Volantes',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Porteirinha',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Porto Firme',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Poté',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Pouso Alegre',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Pouso Alto',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Prados',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Prata',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Pratápolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Pratinha',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Presidente Bernardes',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Presidente Juscelino',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Presidente Kubitschek',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Presidente Olegário',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Alto Jequitibá',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Prudente de Morais',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Quartel Geral',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Queluzito',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Raposos',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Raul Soares',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Recreio',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Reduto',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Resende Costa',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Resplendor',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Ressaquinha',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Riachinho',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Riacho Dos Machados',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Ribeirão Das Neves',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Ribeirão Vermelho',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Rio Acima',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Rio Casca',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Rio Doce',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Rio do Prado',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Rio Espera',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Rio Manso',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Rio Novo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Rio Paranaíba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Rio Pardo de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Rio Piracicaba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Rio Pomba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Rio Preto',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Rio Vermelho',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Ritápolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Rochedo de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Rodeiro',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Romaria',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Rosário da Limeira',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Rubelita',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Rubim',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Sabará',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Sabinópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Sacramento',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Salinas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Salto da Divisa',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Santa Bárbara',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Santa Bárbara do Leste',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Santa Bárbara do Monte Verde',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Santa Bárbara do Tugúrio',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Santa Cruz de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Santa Cruz de Salinas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Santa Cruz do Escalvado',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Santa Efigênia de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Santa fé de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Santa Helena de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Santa Juliana',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Santa Luzia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Santa Margarida',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Santa Maria de Itabira',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Santa Maria do Salto',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Santa Maria do Suaçuí',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Santana da Vargem',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Santana de Cataguases',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Santana de Pirapama',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Santana do Deserto',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Santana do Garambéu',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Santana do Jacaré',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Santana do Manhuaçu',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Santana do Paraíso',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Santana do Riacho',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Santana Dos Montes',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Santa Rita de Caldas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Santa Rita de Jacutinga',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Santa Rita de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Santa Rita de Ibitipoca',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Santa Rita do Itueto',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Santa Rita do Sapucaí',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Santa Rosa da Serra',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Santa Vitória',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Santo Antônio do Amparo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Santo Antônio do Aventureiro',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Santo Antônio do Grama',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Santo Antônio do Itambé',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Santo Antônio do Jacinto',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Santo Antônio do Monte',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Santo Antônio do Retiro',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Santo Antônio do Rio Abaixo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Santo Hipólito',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Santos Dumont',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São Bento Abade',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São Brás do Suaçuí',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São Domingos Das Dores',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São Domingos do Prata',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São Félix de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São Francisco',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São Francisco de Paula',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São Francisco de Sales',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São Francisco do Glória',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São Geraldo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São Geraldo da Piedade',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São Geraldo do Baixio',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São Gonçalo do Abaeté',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São Gonçalo do Pará',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São Gonçalo do Rio Abaixo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São Gonçalo do Sapucaí',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São Gotardo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São João Batista do Glória',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São João da Lagoa',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São João da Mata',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São João da Ponte',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São João Das Missões',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São João Del Rei',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São João do Manhuaçu',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São João do Manteninha',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São João do Oriente',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São João do Pacuí',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São João do Paraíso',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São João Evangelista',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São João Nepomuceno',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São Joaquim de Bicas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São José da Barra',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São José da Lapa',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São José da Safira',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São José da Varginha',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São José do Alegre',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São José do Divino',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São José do Goiabal',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São José do Jacuri',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São José do Mantimento',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São Lourenço',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São Miguel do Anta',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São Pedro da União',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São Pedro Dos Ferros',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São Pedro do Suaçuí',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São Romão',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São Roque de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São Sebastião da Bela Vista',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São Sebastião da Vargem Alegre',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São Sebastião do Anta',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São Sebastião do Maranhão',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São Sebastião do Oeste',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São Sebastião do Paraíso',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São Sebastião do Rio Preto',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São Sebastião do Rio Verde',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São Tiago',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São Tomás de Aquino',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São Thomé Das Letras',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'São Vicente de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Sapucaí-mirim',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Sardoá',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Sarzedo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Setubinha',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Sem-peixe',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Senador Amaral',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Senador Cortes',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Senador Firmino',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Senador José Bento',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Senador Modestino Gonçalves',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Senhora de Oliveira',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Senhora do Porto',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Senhora Dos Remédios',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Sericita',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Seritinga',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Serra Azul de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Serra da Saudade',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Serra Dos Aimorés',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Serra do Salitre',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Serrania',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Serranópolis de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Serranos',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Serro',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Sete Lagoas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Silveirânia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Silvianópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Simão Pereira',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Simonésia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Sobrália',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Soledade de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Tabuleiro',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Taiobeiras',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Taparuba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Tapira',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Tapiraí',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Taquaraçu de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Tarumirim',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Teixeiras',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Teófilo Otoni',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Timóteo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Tiradentes',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Tiros',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Tocantins',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Tocos do Moji',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Toledo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Tombos',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Três Corações',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Três Marias',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Três Pontas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Tumiritinga',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Tupaciguara',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Turmalina',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Turvolândia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Ubá',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Ubaí',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Ubaporanga',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Uberaba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Uberlândia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Umburatiba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Unaí',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'União de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Uruana de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Urucânia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Urucuia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Vargem Alegre',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Vargem Bonita',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Vargem Grande do Rio Pardo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Varginha',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Varjão de Minas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Várzea da Palma',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Varzelândia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Vazante',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Verdelândia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Veredinha',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Veríssimo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Vermelho Novo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Vespasiano',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Viçosa',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Vieiras',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Mathias Lobato',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Virgem da Lapa',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Virgínia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Virginópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Virgolândia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Visconde do Rio Branco',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Volta Grande',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'MG',
                'name' => 'Wenceslau Braz',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Afonso Cláudio',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Águia Branca',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Água Doce do Norte',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Alegre',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Alfredo Chaves',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Alto Rio Novo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Anchieta',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Apiacá',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Aracruz',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Atilio Vivacqua',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Baixo Guandu',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Barra de São Francisco',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Boa Esperança',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Bom Jesus do Norte',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Brejetuba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Cachoeiro de Itapemirim',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Cariacica',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Castelo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Colatina',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Conceição da Barra',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Conceição do Castelo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Divino de São Lourenço',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Domingos Martins',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Dores do Rio Preto',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Ecoporanga',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Fundão',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Governador Lindenberg',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Guaçuí',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Guarapari',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Ibatiba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Ibiraçu',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Ibitirama',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Iconha',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Irupi',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Itaguaçu',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Itapemirim',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Itarana',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Iúna',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Jaguaré',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Jerônimo Monteiro',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'João Neiva',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Laranja da Terra',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Linhares',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Mantenópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Marataízes',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Marechal Floriano',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Marilândia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Mimoso do Sul',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Montanha',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Mucurici',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Muniz Freire',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Muqui',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Nova Venécia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Pancas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Pedro Canário',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Pinheiros',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Piúma',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Ponto Belo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Presidente Kennedy',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Rio Bananal',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Rio Novo do Sul',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Santa Leopoldina',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Santa Maria de Jetibá',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Santa Teresa',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'São Domingos do Norte',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'São Gabriel da Palha',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'São José do Calçado',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'São Mateus',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'São Roque do Canaã',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Serra',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Sooretama',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Vargem Alta',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Venda Nova do Imigrante',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Viana',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Vila Pavão',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Vila Valério',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Vila Velha',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'ES',
                'name' => 'Vitória',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Angra Dos Reis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Aperibé',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Araruama',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Areal',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Armação Dos Búzios',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Arraial do Cabo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Barra do Piraí',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Barra Mansa',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Belford Roxo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Bom Jardim',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Bom Jesus do Itabapoana',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Cabo Frio',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Cachoeiras de Macacu',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Cambuci',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Carapebus',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Comendador Levy Gasparian',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Campos Dos Goytacazes',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Cantagalo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Cardoso Moreira',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Carmo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Casimiro de Abreu',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Conceição de Macabu',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Cordeiro',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Duas Barras',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Duque de Caxias',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Engenheiro Paulo de Frontin',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Guapimirim',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Iguaba Grande',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Itaboraí',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Itaguaí',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Italva',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Itaocara',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Itaperuna',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Itatiaia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Japeri',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Laje do Muriaé',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Macaé',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Macuco',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Magé',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Mangaratiba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Maricá',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Mendes',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Mesquita',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Miguel Pereira',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Miracema',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Natividade',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Nilópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Niterói',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Nova Friburgo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Nova Iguaçu',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Paracambi',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Paraíba do Sul',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Parati',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Paty do Alferes',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Petrópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Pinheiral',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Piraí',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Porciúncula',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Porto Real',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Quatis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Queimados',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Quissamã',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Resende',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Rio Bonito',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Rio Claro',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Rio Das Flores',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Rio Das Ostras',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Rio de Janeiro',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Santa Maria Madalena',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Santo Antônio de Pádua',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'São Francisco de Itabapoana',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'São Fidélis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'São Gonçalo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'São João da Barra',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'São João de Meriti',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'São José de Ubá',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'São José do Vale do Rio Preto',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'São Pedro da Aldeia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'São Sebastião do Alto',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Sapucaia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Saquarema',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Seropédica',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Silva Jardim',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Sumidouro',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Tanguá',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Teresópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Trajano de Morais',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Três Rios',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Valença',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Varre-sai',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Vassouras',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'RJ',
                'name' => 'Volta Redonda',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Adamantina',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Adolfo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Aguaí',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Águas da Prata',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Águas de Lindóia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Águas de Santa Bárbara',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Águas de São Pedro',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Agudos',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Alambari',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Alfredo Marcondes',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Altair',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Altinópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Alto Alegre',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Alumínio',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Álvares Florence',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Álvares Machado',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Álvaro de Carvalho',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Alvinlândia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Americana',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Américo Brasiliense',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Américo de Campos',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Amparo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Analândia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Andradina',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Angatuba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Anhembi',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Anhumas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Aparecida',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Aparecida D´oeste',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Apiaí',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Araçariguama',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Araçatuba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Araçoiaba da Serra',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Aramina',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Arandu',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Arapeí',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Araraquara',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Araras',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Arco-íris',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Arealva',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Areias',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Areiópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Ariranha',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Artur Nogueira',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Arujá',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Aspásia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Assis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Atibaia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Auriflama',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Avaí',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Avanhandava',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Avaré',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Bady Bassitt',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Balbinos',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Bálsamo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Bananal',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Barão de Antonina',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Barbosa',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Bariri',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Barra Bonita',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Barra do Chapéu',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Barra do Turvo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Barretos',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Barrinha',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Barueri',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Bastos',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Batatais',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Bauru',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Bebedouro',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Bento de Abreu',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Bernardino de Campos',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Bertioga',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Bilac',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Birigui',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Biritiba-mirim',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Boa Esperança do Sul',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Bocaina',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Bofete',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Boituva',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Bom Jesus Dos Perdões',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Bom Sucesso de Itararé',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Borá',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Boracéia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Borborema',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Borebi',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Botucatu',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Bragança Paulista',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Braúna',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Brejo Alegre',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Brodowski',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Brotas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Buri',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Buritama',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Buritizal',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Cabrália Paulista',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Cabreúva',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Caçapava',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Cachoeira Paulista',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Caconde',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Cafelândia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Caiabu',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Caieiras',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Caiuá',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Cajamar',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Cajati',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Cajobi',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Cajuru',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Campina do Monte Alegre',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Campinas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Campo Limpo Paulista',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Campos do Jordão',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Campos Novos Paulista',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Cananéia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Canas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Cândido Mota',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Cândido Rodrigues',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Canitar',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Capão Bonito',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Capela do Alto',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Capivari',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Caraguatatuba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Carapicuíba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Cardoso',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Casa Branca',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Cássia Dos Coqueiros',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Castilho',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Catanduva',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Catiguá',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Cedral',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Cerqueira César',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Cerquilho',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Cesário Lange',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Charqueada',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Clementina',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Colina',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Colômbia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Conchal',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Conchas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Cordeirópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Coroados',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Coronel Macedo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Corumbataí',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Cosmópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Cosmorama',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Cotia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Cravinhos',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Cristais Paulista',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Cruzália',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Cruzeiro',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Cubatão',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Cunha',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Descalvado',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Diadema',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Dirce Reis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Divinolândia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Dobrada',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Dois Córregos',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Dolcinópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Dourado',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Dracena',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Duartina',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Dumont',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Echaporã',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Eldorado',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Elias Fausto',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Elisiário',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Embaúba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Embu',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Embu-guaçu',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Emilianópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Engenheiro Coelho',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Espírito Santo do Pinhal',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Espírito Santo do Turvo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Estrela D´oeste',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Estrela do Norte',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Euclides da Cunha Paulista',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Fartura',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Fernandópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Fernando Prestes',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Fernão',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Ferraz de Vasconcelos',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Flora Rica',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Floreal',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Flórida Paulista',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Florínia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Franca',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Francisco Morato',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Franco da Rocha',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Gabriel Monteiro',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Gália',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Garça',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Gastão Vidigal',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Gavião Peixoto',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'General Salgado',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Getulina',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Glicério',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Guaiçara',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Guaimbê',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Guaíra',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Guapiaçu',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Guapiara',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Guará',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Guaraçaí',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Guaraci',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Guarani D´oeste',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Guarantã',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Guararapes',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Guararema',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Guaratinguetá',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Guareí',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Guariba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Guarujá',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Guarulhos',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Guatapará',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Guzolândia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Herculândia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Holambra',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Hortolândia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Iacanga',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Iacri',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Iaras',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Ibaté',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Ibirá',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Ibirarema',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Ibitinga',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Ibiúna',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Icém',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Iepê',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Igaraçu do Tietê',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Igarapava',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Igaratá',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Iguape',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Ilhabela',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Ilha Comprida',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Ilha Solteira',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Indaiatuba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Indiana',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Indiaporã',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Inúbia Paulista',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Ipaussu',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Iperó',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Ipeúna',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Ipiguá',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Iporanga',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Ipuã',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Iracemápolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Irapuã',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Irapuru',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Itaberá',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Itaí',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Itajobi',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Itaju',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Itanhaém',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Itaóca',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Itapecerica da Serra',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Itapetininga',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Itapeva',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Itapevi',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Itapira',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Itapirapuã Paulista',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Itápolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Itaporanga',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Itapuí',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Itapura',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Itaquaquecetuba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Itararé',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Itariri',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Itatiba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Itatinga',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Itirapina',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Itirapuã',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Itobi',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Itu',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Itupeva',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Ituverava',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Jaborandi',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Jaboticabal',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Jacareí',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Jaci',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Jacupiranga',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Jaguariúna',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Jales',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Jambeiro',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Jandira',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Jardinópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Jarinu',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Jaú',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Jeriquara',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Joanópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'João Ramalho',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'José Bonifácio',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Júlio Mesquita',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Jumirim',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Jundiaí',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Junqueirópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Juquiá',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Juquitiba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Lagoinha',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Laranjal Paulista',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Lavínia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Lavrinhas',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Leme',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Lençóis Paulista',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Limeira',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Lindóia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Lins',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Lorena',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Lourdes',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Louveira',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Lucélia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Lucianópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Luís Antônio',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Luiziânia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Lupércio',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Lutécia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Macatuba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Macaubal',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Macedônia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Magda',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Mairinque',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Mairiporã',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Manduri',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Marabá Paulista',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Maracaí',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Marapoama',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Mariápolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Marília',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Marinópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Martinópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Matão',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Mauá',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Mendonça',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Meridiano',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Mesópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Miguelópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Mineiros do Tietê',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Miracatu',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Mira Estrela',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Mirandópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Mirante do Paranapanema',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Mirassol',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Mirassolândia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Mococa',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Moji Das Cruzes',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Mogi Guaçu',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Moji-mirim',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Mombuca',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Monções',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Mongaguá',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Monte Alegre do Sul',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Monte Alto',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Monte Aprazível',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Monte Azul Paulista',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Monte Castelo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Monteiro Lobato',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Monte Mor',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Morro Agudo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Morungaba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Motuca',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Murutinga do Sul',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Nantes',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Narandiba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Natividade da Serra',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Nazaré Paulista',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Neves Paulista',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Nhandeara',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Nipoã',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Nova Aliança',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Nova Campina',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Nova Canaã Paulista',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Nova Castilho',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Nova Europa',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Nova Granada',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Nova Guataporanga',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Nova Independência',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Novais',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Nova Luzitânia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Nova Odessa',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Novo Horizonte',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Nuporanga',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Ocauçu',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Óleo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Olímpia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Onda Verde',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Oriente',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Orindiúva',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Orlândia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Osasco',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Oscar Bressane',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Osvaldo Cruz',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Ourinhos',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Ouroeste',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Ouro Verde',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Pacaembu',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Palestina',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Palmares Paulista',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Palmeira D´oeste',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Palmital',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Panorama',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Paraguaçu Paulista',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Paraibuna',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Paraíso',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Paranapanema',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Paranapuã',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Parapuã',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Pardinho',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Pariquera-açu',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Parisi',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Patrocínio Paulista',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Paulicéia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Paulínia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Paulistânia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Paulo de Faria',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Pederneiras',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Pedra Bela',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Pedranópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Pedregulho',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Pedreira',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Pedrinhas Paulista',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Pedro de Toledo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Penápolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Pereira Barreto',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Pereiras',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Peruíbe',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Piacatu',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Piedade',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Pilar do Sul',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Pindamonhangaba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Pindorama',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Pinhalzinho',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Piquerobi',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Piquete',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Piracaia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Piracicaba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Piraju',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Pirajuí',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Pirangi',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Pirapora do Bom Jesus',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Pirapozinho',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Pirassununga',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Piratininga',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Pitangueiras',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Planalto',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Platina',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Poá',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Poloni',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Pompéia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Pongaí',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Pontal',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Pontalinda',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Pontes Gestal',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Populina',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Porangaba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Porto Feliz',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Porto Ferreira',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Potim',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Potirendaba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Pracinha',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Pradópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Praia Grande',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Pratânia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Presidente Alves',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Presidente Bernardes',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Presidente Epitácio',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Presidente Prudente',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Presidente Venceslau',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Promissão',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Quadra',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Quatá',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Queiroz',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Queluz',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Quintana',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Rafard',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Rancharia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Redenção da Serra',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Regente Feijó',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Reginópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Registro',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Restinga',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Ribeira',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Ribeirão Bonito',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Ribeirão Branco',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Ribeirão Corrente',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Ribeirão do Sul',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Ribeirão Dos Índios',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Ribeirão Grande',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Ribeirão Pires',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Ribeirão Preto',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Riversul',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Rifaina',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Rincão',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Rinópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Rio Claro',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Rio Das Pedras',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Rio Grande da Serra',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Riolândia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Rosana',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Roseira',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Rubiácea',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Rubinéia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Sabino',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Sagres',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Sales',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Sales Oliveira',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Salesópolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Salmourão',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Saltinho',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Salto',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Salto de Pirapora',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Salto Grande',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Sandovalina',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Santa Adélia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Santa Albertina',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Santa Bárbara D´oeste',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Santa Branca',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Santa Clara D´oeste',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Santa Cruz da Conceição',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Santa Cruz da Esperança',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Santa Cruz Das Palmeiras',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Santa Cruz do Rio Pardo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Santa Ernestina',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Santa fé do Sul',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Santa Gertrudes',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Santa Isabel',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Santa Lúcia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Santa Maria da Serra',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Santa Mercedes',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Santana da Ponte Pensa',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Santana de Parnaíba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Santa Rita D´oeste',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Santa Rita do Passa Quatro',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Santa Rosa de Viterbo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Santa Salete',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Santo Anastácio',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Santo André',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Santo Antônio da Alegria',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Santo Antônio de Posse',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Santo Antônio do Aracanguá',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Santo Antônio do Jardim',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Santo Antônio do Pinhal',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Santo Expedito',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Santópolis do Aguapeí',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Santos',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'São Bento do Sapucaí',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'São Bernardo do Campo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'São Caetano do Sul',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'São Carlos',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'São Francisco',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'São João da Boa Vista',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'São João Das Duas Pontes',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'São João de Iracema',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'São João do Pau D´alho',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'São Joaquim da Barra',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'São José da Bela Vista',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'São José do Barreiro',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'São José do Rio Pardo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'São José do Rio Preto',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'São José Dos Campos',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'São Lourenço da Serra',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'São Luís do Paraitinga',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'São Manuel',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'São Miguel Arcanjo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'São Paulo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'São Pedro',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'São Pedro do Turvo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'São Roque',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'São Sebastião',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'São Sebastião da Grama',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'São Simão',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'São Vicente',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Sarapuí',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Sarutaiá',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Sebastianópolis do Sul',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Serra Azul',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Serrana',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Serra Negra',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Sertãozinho',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Sete Barras',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Severínia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Silveiras',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Socorro',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Sorocaba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Sud Mennucci',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Sumaré',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Suzano',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Suzanápolis',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Tabapuã',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Tabatinga',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Taboão da Serra',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Taciba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Taguaí',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Taiaçu',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Taiúva',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Tambaú',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Tanabi',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Tapiraí',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Tapiratiba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Taquaral',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Taquaritinga',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Taquarituba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Taquarivaí',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Tarabai',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Tarumã',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Tatuí',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Taubaté',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Tejupá',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Teodoro Sampaio',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Terra Roxa',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Tietê',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Timburi',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Torre de Pedra',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Torrinha',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Trabiju',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Tremembé',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Três Fronteiras',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Tuiuti',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Tupã',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Tupi Paulista',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Turiúba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Turmalina',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Ubarana',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Ubatuba',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Ubirajara',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Uchoa',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'União Paulista',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Urânia',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Uru',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Urupês',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Valentim Gentil',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Valinhos',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Valparaíso',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Vargem',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Vargem Grande do Sul',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Vargem Grande Paulista',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Várzea Paulista',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Vera Cruz',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Vinhedo',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Viradouro',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Vista Alegre do Alto',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Vitória Brasil',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Votorantim',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Votuporanga',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Zacarias',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Chavantes',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'SP',
                'name' => 'Estiva Gerbi',
                'region' => 'Região Sudeste'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Abatiá',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Adrianópolis',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Agudos do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Almirante Tamandaré',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Altamira do Paraná',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Altônia',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Alto Paraná',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Alto Piquiri',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Alvorada do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Amaporã',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Ampére',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Anahy',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Andirá',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Ângulo',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Antonina',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Antônio Olinto',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Apucarana',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Arapongas',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Arapoti',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Arapuã',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Araruna',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Araucária',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Ariranha do Ivaí',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Assaí',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Assis Chateaubriand',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Astorga',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Atalaia',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Balsa Nova',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Bandeirantes',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Barbosa Ferraz',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Barracão',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Barra do Jacaré',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Bela Vista da Caroba',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Bela Vista do Paraíso',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Bituruna',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Boa Esperança',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Boa Esperança do Iguaçu',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Boa Ventura de São Roque',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Boa Vista da Aparecida',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Bocaiúva do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Bom Jesus do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Bom Sucesso',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Bom Sucesso do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Borrazópolis',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Braganey',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Brasilândia do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Cafeara',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Cafelândia',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Cafezal do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Califórnia',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Cambará',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Cambé',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Cambira',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Campina da Lagoa',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Campina do Simão',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Campina Grande do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Campo Bonito',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Campo do Tenente',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Campo Largo',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Campo Magro',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Campo Mourão',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Cândido de Abreu',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Candói',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Cantagalo',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Capanema',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Capitão Leônidas Marques',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Carambeí',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Carlópolis',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Cascavel',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Castro',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Catanduvas',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Centenário do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Cerro Azul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Céu Azul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Chopinzinho',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Cianorte',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Cidade Gaúcha',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Clevelândia',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Colombo',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Colorado',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Congonhinhas',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Conselheiro Mairinck',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Contenda',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Corbélia',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Cornélio Procópio',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Coronel Domingos Soares',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Coronel Vivida',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Corumbataí do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Cruzeiro do Iguaçu',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Cruzeiro do Oeste',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Cruzeiro do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Cruz Machado',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Cruzmaltina',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Curitiba',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Curiúva',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Diamante do Norte',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Diamante do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Diamante D´oeste',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Dois Vizinhos',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Douradina',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Doutor Camargo',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Enéas Marques',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Engenheiro Beltrão',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Esperança Nova',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Entre Rios do Oeste',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Espigão Alto do Iguaçu',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Farol',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Faxinal',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Fazenda Rio Grande',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Fênix',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Fernandes Pinheiro',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Figueira',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Floraí',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Flor da Serra do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Floresta',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Florestópolis',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Flórida',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Formosa do Oeste',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Foz do Iguaçu',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Francisco Alves',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Francisco Beltrão',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Foz do Jordão',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'General Carneiro',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Godoy Moreira',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Goioerê',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Goioxim',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Grandes Rios',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Guaíra',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Guairaçá',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Guamiranga',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Guapirama',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Guaporema',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Guaraci',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Guaraniaçu',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Guarapuava',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Guaraqueçaba',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Guaratuba',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Honório Serpa',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Ibaiti',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Ibema',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Ibiporã',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Icaraíma',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Iguaraçu',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Iguatu',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Imbaú',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Imbituva',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Inácio Martins',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Inajá',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Indianópolis',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Ipiranga',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Iporã',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Iracema do Oeste',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Irati',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Iretama',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Itaguajé',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Itaipulândia',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Itambaracá',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Itambé',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Itapejara D´oeste',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Itaperuçu',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Itaúna do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Ivaí',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Ivaiporã',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Ivaté',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Ivatuba',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Jaboti',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Jacarezinho',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Jaguapitã',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Jaguariaíva',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Jandaia do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Janiópolis',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Japira',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Japurá',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Jardim Alegre',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Jardim Olinda',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Jataizinho',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Jesuítas',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Joaquim Távora',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Jundiaí do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Juranda',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Jussara',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Kaloré',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Lapa',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Laranjal',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Laranjeiras do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Leópolis',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Lidianópolis',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Lindoeste',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Loanda',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Lobato',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Londrina',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Luiziana',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Lunardelli',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Lupionópolis',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Mallet',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Mamborê',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Mandaguaçu',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Mandaguari',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Mandirituba',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Manfrinópolis',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Mangueirinha',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Manoel Ribas',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Marechal Cândido Rondon',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Maria Helena',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Marialva',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Marilândia do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Marilena',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Mariluz',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Maringá',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Mariópolis',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Maripá',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Marmeleiro',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Marquinho',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Marumbi',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Matelândia',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Matinhos',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Mato Rico',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Mauá da Serra',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Medianeira',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Mercedes',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Mirador',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Miraselva',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Missal',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Moreira Sales',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Morretes',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Munhoz de Melo',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Nossa Senhora Das Graças',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Nova Aliança do Ivaí',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Nova América da Colina',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Nova Aurora',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Nova Cantu',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Nova Esperança',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Nova Esperança do Sudoeste',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Nova Fátima',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Nova Laranjeiras',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Nova Londrina',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Nova Olímpia',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Nova Santa Bárbara',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Nova Santa Rosa',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Nova Prata do Iguaçu',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Nova Tebas',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Novo Itacolomi',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Ortigueira',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Ourizona',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Ouro Verde do Oeste',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Paiçandu',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Palmas',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Palmeira',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Palmital',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Palotina',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Paraíso do Norte',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Paranacity',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Paranaguá',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Paranapoema',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Paranavaí',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Pato Bragado',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Pato Branco',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Paula Freitas',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Paulo Frontin',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Peabiru',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Perobal',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Pérola',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Pérola D´oeste',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Piên',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Pinhais',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Pinhalão',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Pinhal de São Bento',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Pinhão',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Piraí do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Piraquara',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Pitanga',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Pitangueiras',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Planaltina do Paraná',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Planalto',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Ponta Grossa',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Pontal do Paraná',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Porecatu',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Porto Amazonas',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Porto Barreiro',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Porto Rico',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Porto Vitória',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Prado Ferreira',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Pranchita',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Presidente Castelo Branco',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Primeiro de Maio',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Prudentópolis',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Quarto Centenário',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Quatiguá',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Quatro Barras',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Quatro Pontes',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Quedas do Iguaçu',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Querência do Norte',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Quinta do Sol',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Quitandinha',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Ramilândia',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Rancho Alegre',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Rancho Alegre D´oeste',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Realeza',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Rebouças',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Renascença',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Reserva',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Reserva do Iguaçu',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Ribeirão Claro',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Ribeirão do Pinhal',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Rio Azul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Rio Bom',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Rio Bonito do Iguaçu',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Rio Branco do Ivaí',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Rio Branco do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Rio Negro',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Rolândia',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Roncador',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Rondon',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Rosário do Ivaí',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Sabáudia',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Salgado Filho',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Salto do Itararé',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Salto do Lontra',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Santa Amélia',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Santa Cecília do Pavão',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Santa Cruz de Monte Castelo',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Santa fé',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Santa Helena',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Santa Inês',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Santa Isabel do Ivaí',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Santa Izabel do Oeste',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Santa Lúcia',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Santa Maria do Oeste',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Santa Mariana',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Santa Mônica',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Santana do Itararé',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Santa Tereza do Oeste',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Santa Terezinha de Itaipu',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Santo Antônio da Platina',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Santo Antônio do Caiuá',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Santo Antônio do Paraíso',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Santo Antônio do Sudoeste',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Santo Inácio',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'São Carlos do Ivaí',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'São Jerônimo da Serra',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'São João',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'São João do Caiuá',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'São João do Ivaí',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'São João do Triunfo',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'São Jorge D´oeste',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'São Jorge do Ivaí',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'São Jorge do Patrocínio',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'São José da Boa Vista',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'São José Das Palmeiras',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'São José Dos Pinhais',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'São Manoel do Paraná',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'São Mateus do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'São Miguel do Iguaçu',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'São Pedro do Iguaçu',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'São Pedro do Ivaí',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'São Pedro do Paraná',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'São Sebastião da Amoreira',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'São Tomé',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Sapopema',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Sarandi',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Saudade do Iguaçu',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Sengés',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Serranópolis do Iguaçu',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Sertaneja',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Sertanópolis',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Siqueira Campos',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Sulina',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Tamarana',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Tamboara',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Tapejara',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Tapira',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Teixeira Soares',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Telêmaco Borba',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Terra Boa',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Terra Rica',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Terra Roxa',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Tibagi',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Tijucas do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Toledo',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Tomazina',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Três Barras do Paraná',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Tunas do Paraná',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Tuneiras do Oeste',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Tupãssi',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Turvo',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Ubiratã',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Umuarama',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'União da Vitória',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Uniflor',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Uraí',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Wenceslau Braz',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Ventania',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Vera Cruz do Oeste',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Verê',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Vila Alta',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Doutor Ulysses',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Virmond',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Vitorino',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'PR',
                'name' => 'Xambrê',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Abdon Batista',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Abelardo Luz',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Agrolândia',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Agronômica',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Água Doce',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Águas de Chapecó',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Águas Frias',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Águas Mornas',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Alfredo Wagner',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Alto Bela Vista',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Anchieta',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Angelina',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Anita Garibaldi',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Anitápolis',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Antônio Carlos',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Apiúna',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Arabutã',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Araquari',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Araranguá',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Armazém',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Arroio Trinta',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Arvoredo',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Ascurra',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Atalanta',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Aurora',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Balneário Arroio do Silva',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Balneário Camboriú',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Balneário Barra do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Balneário Gaivota',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Bandeirante',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Barra Bonita',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Barra Velha',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Bela Vista do Toldo',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Belmonte',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Benedito Novo',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Biguaçu',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Blumenau',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Bocaina do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Bombinhas',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Bom Jardim da Serra',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Bom Jesus',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Bom Jesus do Oeste',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Bom Retiro',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Botuverá',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Braço do Norte',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Braço do Trombudo',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Brunópolis',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Brusque',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Caçador',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Caibi',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Calmon',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Camboriú',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Capão Alto',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Campo Alegre',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Campo Belo do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Campo Erê',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Campos Novos',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Canelinha',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Canoinhas',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Capinzal',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Capivari de Baixo',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Catanduvas',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Caxambu do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Celso Ramos',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Cerro Negro',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Chapadão do Lageado',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Chapecó',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Cocal do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Concórdia',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Cordilheira Alta',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Coronel Freitas',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Coronel Martins',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Corupá',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Correia Pinto',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Criciúma',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Cunha Porã',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Cunhataí',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Curitibanos',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Descanso',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Dionísio Cerqueira',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Dona Emma',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Doutor Pedrinho',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Entre Rios',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Ermo',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Erval Velho',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Faxinal Dos Guedes',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Flor do Sertão',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Florianópolis',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Formosa do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Forquilhinha',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Fraiburgo',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Frei Rogério',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Galvão',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Garopaba',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Garuva',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Gaspar',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Governador Celso Ramos',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Grão Pará',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Gravatal',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Guabiruba',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Guaraciaba',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Guaramirim',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Guarujá do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Guatambú',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Herval D´oeste',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Ibiam',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Ibicaré',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Ibirama',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Içara',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Ilhota',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Imaruí',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Imbituba',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Imbuia',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Indaial',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Iomerê',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Ipira',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Iporã do Oeste',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Ipuaçu',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Ipumirim',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Iraceminha',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Irani',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Irati',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Irineópolis',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Itá',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Itaiópolis',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Itajaí',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Itapema',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Itapiranga',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Itapoá',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Ituporanga',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Jaborá',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Jacinto Machado',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Jaguaruna',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Jaraguá do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Jardinópolis',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Joaçaba',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Joinville',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'José Boiteux',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Jupiá',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Lacerdópolis',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Lages',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Laguna',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Lajeado Grande',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Laurentino',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Lauro Muller',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Lebon Régis',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Leoberto Leal',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Lindóia do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Lontras',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Luiz Alves',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Luzerna',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Macieira',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Mafra',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Major Gercino',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Major Vieira',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Maracajá',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Maravilha',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Marema',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Massaranduba',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Matos Costa',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Meleiro',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Mirim Doce',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Modelo',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Mondaí',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Monte Carlo',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Monte Castelo',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Morro da Fumaça',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Morro Grande',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Navegantes',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Nova Erechim',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Nova Itaberaba',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Nova Trento',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Nova Veneza',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Novo Horizonte',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Orleans',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Otacílio Costa',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Ouro',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Ouro Verde',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Paial',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Painel',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Palhoça',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Palma Sola',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Palmeira',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Palmitos',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Papanduva',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Paraíso',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Passo de Torres',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Passos Maia',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Paulo Lopes',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Pedras Grandes',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Penha',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Peritiba',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Pescaria Brava',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Petrolândia',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Piçarras',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Pinhalzinho',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Pinheiro Preto',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Piratuba',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Planalto Alegre',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Pomerode',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Ponte Alta',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Ponte Alta do Norte',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Ponte Serrada',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Porto Belo',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Porto União',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Pouso Redondo',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Praia Grande',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Presidente Castelo Branco',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Presidente Getúlio',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Presidente Nereu',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Princesa',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Quilombo',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Rancho Queimado',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Rio Das Antas',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Rio do Campo',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Rio do Oeste',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Rio Dos Cedros',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Rio do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Rio Fortuna',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Rio Negrinho',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Rio Rufino',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Riqueza',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Rodeio',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Romelândia',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Salete',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Saltinho',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Salto Veloso',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Sangão',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Santa Cecília',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Santa Helena',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Santa Rosa de Lima',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Santa Rosa do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Santa Terezinha',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Santa Terezinha do Progresso',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Santiago do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Santo Amaro da Imperatriz',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'São Bernardino',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'São Bento do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'São Bonifácio',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'São Carlos',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'São Cristovão do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'São Domingos',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'São Francisco do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'São João do Oeste',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'São João Batista',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'São João do Itaperiú',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'São João do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'São Joaquim',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'São José',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'São José do Cedro',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'São José do Cerrito',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'São Lourenço do Oeste',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'São Ludgero',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'São Martinho',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'São Miguel da Boa Vista',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'São Miguel do Oeste',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'São Pedro de Alcântara',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Saudades',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Schroeder',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Seara',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Serra Alta',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Siderópolis',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Sombrio',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Sul Brasil',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Taió',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Tangará',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Tigrinhos',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Tijucas',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Timbé do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Timbó',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Timbó Grande',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Três Barras',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Treviso',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Treze de Maio',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Treze Tílias',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Trombudo Central',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Tubarão',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Tunápolis',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Turvo',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'União do Oeste',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Urubici',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Urupema',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Urussanga',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Vargeão',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Vargem',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Vargem Bonita',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Vidal Ramos',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Videira',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Vitor Meireles',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Witmarsum',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Xanxerê',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Xavantina',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Xaxim',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Zortéa',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'SC',
                'name' => 'Balneário Rincão',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Aceguá',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Água Santa',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Agudo',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Ajuricaba',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Alecrim',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Alegrete',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Alegria',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Almirante Tamandaré do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Alpestre',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Alto Alegre',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Alto Feliz',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Alvorada',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Amaral Ferrador',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Ametista do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'André da Rocha',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Anta Gorda',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Antônio Prado',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Arambaré',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Araricá',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Aratiba',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Arroio do Meio',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Arroio do Sal',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Arroio do Padre',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Arroio Dos Ratos',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Arroio do Tigre',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Arroio Grande',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Arvorezinha',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Augusto Pestana',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Áurea',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Bagé',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Balneário Pinhal',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Barão',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Barão de Cotegipe',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Barão do Triunfo',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Barracão',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Barra do Guarita',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Barra do Quaraí',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Barra do Ribeiro',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Barra do Rio Azul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Barra Funda',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Barros Cassal',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Benjamin Constant do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Bento Gonçalves',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Boa Vista Das Missões',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Boa Vista do Buricá',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Boa Vista do Cadeado',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Boa Vista do Incra',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Boa Vista do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Bom Jesus',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Bom Princípio',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Bom Progresso',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Bom Retiro do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Boqueirão do Leão',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Bossoroca',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Bozano',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Braga',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Brochier',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Butiá',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Caçapava do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Cacequi',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Cachoeira do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Cachoeirinha',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Cacique Doble',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Caibaté',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Caiçara',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Camaquã',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Camargo',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Cambará do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Campestre da Serra',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Campina Das Missões',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Campinas do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Campo Bom',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Campo Novo',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Campos Borges',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Candelária',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Cândido Godói',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Candiota',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Canela',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Canguçu',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Canoas',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Canudos do Vale',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Capão Bonito do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Capão da Canoa',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Capão do Cipó',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Capão do Leão',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Capivari do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Capela de Santana',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Capitão',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Carazinho',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Caraá',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Carlos Barbosa',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Carlos Gomes',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Casca',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Caseiros',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Catuípe',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Caxias do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Centenário',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Cerrito',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Cerro Branco',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Cerro Grande',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Cerro Grande do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Cerro Largo',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Chapada',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Charqueadas',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Charrua',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Chiapetta',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Chuí',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Chuvisca',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Cidreira',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Ciríaco',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Colinas',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Colorado',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Condor',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Constantina',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Coqueiro Baixo',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Coqueiros do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Coronel Barros',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Coronel Bicaco',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Coronel Pilar',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Cotiporã',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Coxilha',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Crissiumal',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Cristal',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Cristal do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Cruz Alta',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Cruzaltense',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Cruzeiro do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'David Canabarro',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Derrubadas',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Dezesseis de Novembro',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Dilermando de Aguiar',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Dois Irmãos',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Dois Irmãos Das Missões',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Dois Lajeados',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Dom Feliciano',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Dom Pedro de Alcântara',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Dom Pedrito',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Dona Francisca',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Doutor Maurício Cardoso',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Doutor Ricardo',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Eldorado do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Encantado',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Encruzilhada do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Engenho Velho',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Entre-ijuís',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Entre Rios do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Erebango',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Erechim',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Ernestina',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Herval',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Erval Grande',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Erval Seco',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Esmeralda',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Esperança do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Espumoso',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Estação',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Estância Velha',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Esteio',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Estrela',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Estrela Velha',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Eugênio de Castro',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Fagundes Varela',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Farroupilha',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Faxinal do Soturno',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Faxinalzinho',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Fazenda Vilanova',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Feliz',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Flores da Cunha',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Floriano Peixoto',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Fontoura Xavier',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Formigueiro',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Forquetinha',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Fortaleza Dos Valos',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Frederico Westphalen',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Garibaldi',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Garruchos',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Gaurama',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'General Câmara',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Gentil',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Getúlio Vargas',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Giruá',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Glorinha',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Gramado',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Gramado Dos Loureiros',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Gramado Xavier',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Gravataí',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Guabiju',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Guaíba',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Guaporé',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Guarani Das Missões',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Harmonia',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Herveiras',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Horizontina',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Hulha Negra',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Humaitá',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Ibarama',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Ibiaçá',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Ibiraiaras',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Ibirapuitã',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Ibirubá',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Igrejinha',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Ijuí',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Ilópolis',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Imbé',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Imigrante',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Independência',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Inhacorá',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Ipê',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Ipiranga do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Iraí',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Itaara',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Itacurubi',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Itapuca',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Itaqui',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Itati',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Itatiba do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Ivorá',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Ivoti',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Jaboticaba',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Jacuizinho',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Jacutinga',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Jaguarão',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Jaguari',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Jaquirana',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Jari',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Jóia',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Júlio de Castilhos',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Lagoa Bonita do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Lagoão',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Lagoa Dos Três Cantos',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Lagoa Vermelha',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Lajeado',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Lajeado do Bugre',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Lavras do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Liberato Salzano',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Lindolfo Collor',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Linha Nova',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Machadinho',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Maçambara',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Mampituba',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Manoel Viana',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Maquiné',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Maratá',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Marau',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Marcelino Ramos',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Mariana Pimentel',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Mariano Moro',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Marques de Souza',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Mata',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Mato Castelhano',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Mato Leitão',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Mato Queimado',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Maximiliano de Almeida',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Minas do Leão',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Miraguaí',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Montauri',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Monte Alegre Dos Campos',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Monte Belo do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Montenegro',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Mormaço',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Morrinhos do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Morro Redondo',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Morro Reuter',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Mostardas',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Muçum',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Muitos Capões',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Muliterno',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Não-me-toque',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Nicolau Vergueiro',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Nonoai',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Nova Alvorada',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Nova Araçá',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Nova Bassano',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Nova Boa Vista',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Nova Bréscia',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Nova Candelária',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Nova Esperança do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Nova Hartz',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Nova Pádua',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Nova Palma',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Nova Petrópolis',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Nova Prata',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Nova Ramada',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Nova Roma do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Nova Santa Rita',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Novo Cabrais',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Novo Hamburgo',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Novo Machado',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Novo Tiradentes',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Novo Xingu',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Novo Barreiro',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Osório',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Paim Filho',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Palmares do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Palmeira Das Missões',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Palmitinho',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Panambi',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Pantano Grande',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Paraí',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Paraíso do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Pareci Novo',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Parobé',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Passa Sete',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Passo do Sobrado',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Passo Fundo',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Paulo Bento',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Paverama',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Pedras Altas',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Pedro Osório',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Pejuçara',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Pelotas',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Picada Café',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Pinhal',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Pinhal da Serra',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Pinhal Grande',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Pinheirinho do Vale',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Pinheiro Machado',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Pinto Bandeira',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Pirapó',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Piratini',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Planalto',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Poço Das Antas',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Pontão',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Ponte Preta',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Portão',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Porto Alegre',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Porto Lucena',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Porto Mauá',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Porto Vera Cruz',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Porto Xavier',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Pouso Novo',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Presidente Lucena',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Progresso',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Protásio Alves',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Putinga',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Quaraí',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Quatro Irmãos',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Quevedos',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Quinze de Novembro',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Redentora',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Relvado',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Restinga Seca',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Rio Dos Índios',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Rio Grande',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Rio Pardo',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Riozinho',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Roca Sales',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Rodeio Bonito',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Rolador',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Rolante',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Ronda Alta',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Rondinha',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Roque Gonzales',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Rosário do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Sagrada Família',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Saldanha Marinho',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Salto do Jacuí',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Salvador Das Missões',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Salvador do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Sananduva',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Santa Bárbara do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Santa Cecília do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Santa Clara do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Santa Cruz do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Santa Maria',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Santa Maria do Herval',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Santa Margarida do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Santana da Boa Vista',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Santana do Livramento',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Santa Rosa',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Santa Tereza',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Santa Vitória do Palmar',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Santiago',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Santo Ângelo',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Santo Antônio do Palma',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Santo Antônio da Patrulha',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Santo Antônio Das Missões',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Santo Antônio do Planalto',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Santo Augusto',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Santo Cristo',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Santo Expedito do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'São Borja',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'São Domingos do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'São Francisco de Assis',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'São Francisco de Paula',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'São Gabriel',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'São Jerônimo',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'São João da Urtiga',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'São João do Polêsine',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'São Jorge',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'São José Das Missões',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'São José do Herval',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'São José do Hortêncio',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'São José do Inhacorá',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'São José do Norte',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'São José do Ouro',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'São José do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'São José Dos Ausentes',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'São Leopoldo',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'São Lourenço do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'São Luiz Gonzaga',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'São Marcos',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'São Martinho',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'São Martinho da Serra',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'São Miguel Das Missões',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'São Nicolau',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'São Paulo Das Missões',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'São Pedro da Serra',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'São Pedro Das Missões',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'São Pedro do Butiá',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'São Pedro do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'São Sebastião do Caí',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'São Sepé',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'São Valentim',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'São Valentim do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'São Valério do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'São Vendelino',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'São Vicente do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Sapiranga',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Sapucaia do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Sarandi',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Seberi',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Sede Nova',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Segredo',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Selbach',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Senador Salgado Filho',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Sentinela do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Serafina Corrêa',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Sério',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Sertão',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Sertão Santana',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Sete de Setembro',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Severiano de Almeida',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Silveira Martins',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Sinimbu',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Sobradinho',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Soledade',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Tabaí',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Tapejara',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Tapera',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Tapes',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Taquara',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Taquari',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Taquaruçu do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Tavares',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Tenente Portela',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Terra de Areia',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Teutônia',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Tio Hugo',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Tiradentes do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Toropi',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Torres',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Tramandaí',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Travesseiro',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Três Arroios',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Três Cachoeiras',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Três Coroas',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Três de Maio',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Três Forquilhas',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Três Palmeiras',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Três Passos',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Trindade do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Triunfo',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Tucunduva',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Tunas',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Tupanci do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Tupanciretã',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Tupandi',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Tuparendi',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Turuçu',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Ubiretama',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'União da Serra',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Unistalda',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Uruguaiana',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Vacaria',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Vale Verde',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Vale do Sol',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Vale Real',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Vanini',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Venâncio Aires',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Vera Cruz',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Veranópolis',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Vespasiano Correa',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Viadutos',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Viamão',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Vicente Dutra',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Victor Graeff',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Vila Flores',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Vila Lângaro',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Vila Maria',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Vila Nova do Sul',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Vista Alegre',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Vista Alegre do Prata',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Vista Gaúcha',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Vitória Das Missões',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Westfalia',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'RS',
                'name' => 'Xangri-lá',
                'region' => 'Região Sul'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Água Clara',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Alcinópolis',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Amambaí',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Anastácio',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Anaurilândia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Angélica',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Antônio João',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Aparecida do Taboado',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Aquidauana',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Aral Moreira',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Bandeirantes',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Bataguassu',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Batayporã',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Bela Vista',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Bodoquena',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Bonito',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Brasilândia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Caarapó',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Camapuã',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Campo Grande',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Caracol',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Cassilândia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Chapadão do Sul',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Corguinho',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Coronel Sapucaia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Corumbá',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Costa Rica',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Coxim',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Deodápolis',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Dois Irmãos do Buriti',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Douradina',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Dourados',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Eldorado',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Fátima do Sul',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Figueirão',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Glória de Dourados',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Guia Lopes da Laguna',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Iguatemi',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Inocência',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Itaporã',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Itaquiraí',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Ivinhema',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Japorã',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Jaraguari',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Jardim',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Jateí',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Juti',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Ladário',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Laguna Carapã',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Maracaju',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Miranda',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Mundo Novo',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Naviraí',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Nioaque',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Nova Alvorada do Sul',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Nova Andradina',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Novo Horizonte do Sul',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Paraíso das Águas',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Paranaíba',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Paranhos',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Pedro Gomes',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Ponta Porã',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Porto Murtinho',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Ribas do Rio Pardo',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Rio Brilhante',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Rio Negro',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Rio Verde de Mato Grosso',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Rochedo',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Santa Rita do Pardo',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'São Gabriel do Oeste',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Sete Quedas',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Selvíria',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Sidrolândia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Sonora',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Tacuru',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Taquarussu',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Terenos',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Três Lagoas',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MS',
                'name' => 'Vicentina',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Acorizal',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Água Boa',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Alta Floresta',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Alto Araguaia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Alto Boa Vista',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Alto Garças',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Alto Paraguai',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Alto Taquari',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Apiacás',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Araguaiana',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Araguainha',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Araputanga',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Arenápolis',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Aripuanã',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Barão de Melgaço',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Barra do Bugres',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Barra do Garças',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Bom Jesus do Araguaia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Brasnorte',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Cáceres',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Campinápolis',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Campo Novo do Parecis',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Campo Verde',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Campos de Júlio',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Canabrava do Norte',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Canarana',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Carlinda',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Castanheira',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Chapada Dos Guimarães',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Cláudia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Cocalinho',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Colíder',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Colniza',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Comodoro',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Confresa',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Conquista D´oeste',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Cotriguaçu',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Cuiabá',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Curvelândia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Denise',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Diamantino',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Dom Aquino',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Feliz Natal',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Figueirópolis D´oeste',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Gaúcha do Norte',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'General Carneiro',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Glória D´oeste',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Guarantã do Norte',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Guiratinga',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Indiavaí',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Ipiranga do Norte',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Itanhangá',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Itaúba',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Itiquira',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Jaciara',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Jangada',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Jauru',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Juara',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Juína',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Juruena',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Juscimeira',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Lambari D´oeste',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Lucas do Rio Verde',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Luciára',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Vila Bela da Santíssima Trindade',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Marcelândia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Matupá',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Mirassol D´oeste',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Nobres',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Nortelândia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Nossa Senhora do Livramento',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Nova Bandeirantes',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Nova Nazaré',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Nova Lacerda',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Nova Santa Helena',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Nova Brasilândia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Nova Canaã do Norte',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Nova Mutum',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Nova Olímpia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Nova Ubiratã',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Nova Xavantina',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Novo Mundo',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Novo Horizonte do Norte',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Novo São Joaquim',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Paranaíta',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Paranatinga',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Novo Santo Antônio',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Pedra Preta',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Peixoto de Azevedo',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Planalto da Serra',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Poconé',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Pontal do Araguaia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Ponte Branca',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Pontes e Lacerda',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Porto Alegre do Norte',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Porto Dos Gaúchos',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Porto Esperidião',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Porto Estrela',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Poxoréo',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Primavera do Leste',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Querência',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'São José Dos Quatro Marcos',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Reserva do Cabaçal',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Ribeirão Cascalheira',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Ribeirãozinho',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Rio Branco',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Santa Carmem',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Santo Afonso',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'São José do Povo',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'São José do Rio Claro',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'São José do Xingu',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'São Pedro da Cipa',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Rondolândia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Rondonópolis',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Rosário Oeste',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Santa Cruz do Xingu',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Salto do Céu',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Santa Rita do Trivelato',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Santa Terezinha',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Santo Antônio do Leste',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Santo Antônio do Leverger',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'São Félix do Araguaia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Sapezal',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Serra Nova Dourada',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Sinop',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Sorriso',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Tabaporã',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Tangará da Serra',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Tapurah',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Terra Nova do Norte',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Tesouro',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Torixoréu',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'União do Sul',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Vale de São Domingos',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Várzea Grande',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Vera',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Vila Rica',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Nova Guarita',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Nova Marilândia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Nova Maringá',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'MT',
                'name' => 'Nova Monte Verde',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Abadia de Goiás',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Abadiânia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Acreúna',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Adelândia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Água Fria de Goiás',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Água Limpa',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Águas Lindas de Goiás',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Alexânia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Aloândia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Alto Horizonte',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Alto Paraíso de Goiás',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Alvorada do Norte',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Amaralina',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Americano do Brasil',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Amorinópolis',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Anápolis',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Anhanguera',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Anicuns',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Aparecida de Goiânia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Aparecida do Rio Doce',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Aporé',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Araçu',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Aragarças',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Aragoiânia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Araguapaz',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Arenópolis',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Aruanã',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Aurilândia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Avelinópolis',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Baliza',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Barro Alto',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Bela Vista de Goiás',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Bom Jardim de Goiás',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Bom Jesus de Goiás',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Bonfinópolis',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Bonópolis',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Brazabrantes',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Britânia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Buriti Alegre',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Buriti de Goiás',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Buritinópolis',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Cabeceiras',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Cachoeira Alta',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Cachoeira de Goiás',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Cachoeira Dourada',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Caçu',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Caiapônia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Caldas Novas',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Caldazinha',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Campestre de Goiás',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Campinaçu',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Campinorte',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Campo Alegre de Goiás',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Campo Limpo de Goiás',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Campos Belos',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Campos Verdes',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Carmo do Rio Verde',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Castelândia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Catalão',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Caturaí',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Cavalcante',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Ceres',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Cezarina',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Chapadão do Céu',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Cidade Ocidental',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Cocalzinho de Goiás',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Colinas do Sul',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Córrego do Ouro',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Corumbá de Goiás',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Corumbaíba',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Cristalina',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Cristianópolis',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Crixás',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Cromínia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Cumari',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Damianópolis',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Damolândia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Davinópolis',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Diorama',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Doverlândia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Edealina',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Edéia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Estrela do Norte',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Faina',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Fazenda Nova',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Firminópolis',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Flores de Goiás',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Formosa',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Formoso',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Gameleira de Goiás',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Divinópolis de Goiás',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Goianápolis',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Goiandira',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Goianésia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Goiânia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Goianira',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Goiás',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Goiatuba',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Gouvelândia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Guapó',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Guaraíta',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Guarani de Goiás',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Guarinos',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Heitoraí',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Hidrolândia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Hidrolina',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Iaciara',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Inaciolândia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Indiara',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Inhumas',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Ipameri',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Ipiranga de Goiás',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Iporá',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Israelândia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Itaberaí',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Itaguari',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Itaguaru',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Itajá',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Itapaci',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Itapirapuã',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Itapuranga',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Itarumã',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Itauçu',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Itumbiara',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Ivolândia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Jandaia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Jaraguá',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Jataí',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Jaupaci',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Jesúpolis',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Joviânia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Jussara',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Lagoa Santa',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Leopoldo de Bulhões',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Luziânia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Mairipotaba',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Mambaí',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Mara Rosa',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Marzagão',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Matrinchã',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Maurilândia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Mimoso de Goiás',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Minaçu',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Mineiros',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Moiporá',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Monte Alegre de Goiás',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Montes Claros de Goiás',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Montividiu',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Montividiu do Norte',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Morrinhos',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Morro Agudo de Goiás',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Mossâmedes',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Mozarlândia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Mundo Novo',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Mutunópolis',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Nazário',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Nerópolis',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Niquelândia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Nova América',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Nova Aurora',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Nova Crixás',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Nova Glória',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Nova Iguaçu de Goiás',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Nova Roma',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Nova Veneza',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Novo Brasil',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Novo Gama',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Novo Planalto',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Orizona',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Ouro Verde de Goiás',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Ouvidor',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Padre Bernardo',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Palestina de Goiás',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Palmeiras de Goiás',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Palmelo',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Palminópolis',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Panamá',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Paranaiguara',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Paraúna',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Perolândia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Petrolina de Goiás',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Pilar de Goiás',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Piracanjuba',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Piranhas',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Pirenópolis',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Pires do Rio',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Planaltina',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Pontalina',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Porangatu',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Porteirão',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Portelândia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Posse',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Professor Jamil',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Quirinópolis',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Rialma',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Rianápolis',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Rio Quente',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Rio Verde',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Rubiataba',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Sanclerlândia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Santa Bárbara de Goiás',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Santa Cruz de Goiás',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Santa fé de Goiás',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Santa Helena de Goiás',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Santa Isabel',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Santa Rita do Araguaia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Santa Rita do Novo Destino',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Santa Rosa de Goiás',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Santa Tereza de Goiás',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Santa Terezinha de Goiás',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Santo Antônio da Barra',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Santo Antônio de Goiás',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Santo Antônio do Descoberto',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'São Domingos',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'São Francisco de Goiás',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'São João D´aliança',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'São João da Paraúna',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'São Luís de Montes Belos',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'São Luíz do Norte',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'São Miguel do Araguaia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'São Miguel do Passa Quatro',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'São Patrício',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'São Simão',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Senador Canedo',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Serranópolis',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Silvânia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Simolândia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Sítio D´abadia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Taquaral de Goiás',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Teresina de Goiás',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Terezópolis de Goiás',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Três Ranchos',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Trindade',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Trombas',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Turvânia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Turvelândia',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Uirapuru',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Uruaçu',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Uruana',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Urutaí',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Valparaíso de Goiás',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Varjão',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Vianópolis',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Vicentinópolis',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Vila Boa',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'GO',
                'name' => 'Vila Propício',
                'region' => 'Região Centro-Oeste'
            ],
            [
                'iso_code' => 'DF',
                'name' => 'Brasília',
                'region' => 'Região Centro-Oeste'
            ],
        ];

        foreach (collect($cities)->groupBy('iso_code') as $uf => $cities)
        {
            $state = State::where('iso_code', $uf)->first();

            foreach ($cities as $city)
            {
                City::create([
                    'state_id'  => $state->id,
                    'name'      => $city['name'],
                ]);
            }
        }
    }
}
