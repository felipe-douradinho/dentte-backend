<?php

namespace Modules\Localization\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Localization\Entities\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            [
                'name' => 'Afghanistão',
                'iso_code' => 'AF',
                'iso_code3' => 'AFG',
                'phone_code' => 93
            ],
            [
                'name' => 'África do Sul',
                'iso_code' => 'ZA',
                'iso_code3' => 'ZAF',
                'phone_code' => 27
            ],
            [
                'name' => 'Albânia',
                'iso_code' => 'AL',
                'iso_code3' => 'ALB',
                'phone_code' => 355
            ],
            [
                'name' => 'Alemanha',
                'iso_code' => 'DE',
                'iso_code3' => 'DEU',
                'phone_code' => 49
            ],
            [
                'name' => 'Andora',
                'iso_code' => 'AD',
                'iso_code3' => 'AND',
                'phone_code' => 376
            ],
            [
                'name' => 'Angola',
                'iso_code' => 'AO',
                'iso_code3' => 'AGO',
                'phone_code' => 244
            ],
            [
                'name' => 'Anguilla',
                'iso_code' => 'AI',
                'iso_code3' => 'AIA',
                'phone_code' => 1264
            ],
            [
                'name' => 'Antarctica',
                'iso_code' => 'AQ',
                'iso_code3' => 'ATA',
                'phone_code' => 672
            ],
            [
                'name' => 'Antígua e Barbuda',
                'iso_code' => 'AG',
                'iso_code3' => 'ATG',
                'phone_code' => 1268
            ],
            [
                'name' => 'Argentina',
                'iso_code' => 'AR',
                'iso_code3' => 'ARG',
                'phone_code' => 54
            ],
            [
                'name' => 'Argélia',
                'iso_code' => 'DZ',
                'iso_code3' => 'DZA',
                'phone_code' => 213
            ],
            [
                'name' => 'Arménia',
                'iso_code' => 'AM',
                'iso_code3' => 'ARM',
                'phone_code' => 374
            ],
            [
                'name' => 'Aruba',
                'iso_code' => 'AW',
                'iso_code3' => 'ABW',
                'phone_code' => 297
            ],
            [
                'name' => 'Arábia Saudita',
                'iso_code' => 'SA',
                'iso_code3' => 'SAU',
                'phone_code' => 966
            ],
            [
                'name' => 'Austrália',
                'iso_code' => 'AU',
                'iso_code3' => 'AUS',
                'phone_code' => 61
            ],
            [
                'name' => 'Áustria',
                'iso_code' => 'AT',
                'iso_code3' => 'AUT',
                'phone_code' => 43
            ],
            [
                'name' => 'Azerbaijão',
                'iso_code' => 'AZ',
                'iso_code3' => 'AZE',
                'phone_code' => 994
            ],
            [
                'name' => 'Bahamas',
                'iso_code' => 'BS',
                'iso_code3' => 'BHS',
                'phone_code' => 1242
            ],
            [
                'name' => 'Bahrein',
                'iso_code' => 'BH',
                'iso_code3' => 'BHR',
                'phone_code' => 973
            ],
            [
                'name' => 'Bangladesh',
                'iso_code' => 'BD',
                'iso_code3' => 'BGD',
                'phone_code' => 880
            ],
            [
                'name' => 'Barbados',
                'iso_code' => 'BB',
                'iso_code3' => 'BRB',
                'phone_code' => 1246
            ],
            [
                'name' => 'Bélgica',
                'iso_code' => 'BE',
                'iso_code3' => 'BEL',
                'phone_code' => 32
            ],
            [
                'name' => 'Belize',
                'iso_code' => 'BZ',
                'iso_code3' => 'BLZ',
                'phone_code' => 501
            ],
            [
                'name' => 'Benim',
                'iso_code' => 'BJ',
                'iso_code3' => 'BEN',
                'phone_code' => 229
            ],
            [
                'name' => 'Bermuda',
                'iso_code' => 'BM',
                'iso_code3' => 'BMU',
                'phone_code' => 1441
            ],
            [
                'name' => 'Butão',
                'iso_code' => 'BT',
                'iso_code3' => 'BTN',
                'phone_code' => 975
            ],
            [
                'name' => 'Bielorrússia',
                'iso_code' => 'BY',
                'iso_code3' => 'BLR',
                'phone_code' => 375
            ],
            [
                'name' => 'Bolívia',
                'iso_code' => 'BO',
                'iso_code3' => 'BOL',
                'phone_code' => 591
            ],
            [
                'name' => 'Bósnia e Herzegovina',
                'iso_code' => 'BA',
                'iso_code3' => 'BIH',
                'phone_code' => 387
            ],
            [
                'name' => 'Botswana',
                'iso_code' => 'BW',
                'iso_code3' => 'BWA',
                'phone_code' => 267
            ],
            [
                'name' => 'Brasil',
                'iso_code' => 'BR',
                'iso_code3' => 'BRA',
                'phone_code' => 55
            ],
            [
                'name' => 'British Indian Ocean Territory',
                'iso_code' => 'IO',
                'iso_code3' => 'IOT',
                'phone_code' => ''
            ],
            [
                'name' => 'Brunei',
                'iso_code' => 'BN',
                'iso_code3' => 'BRN',
                'phone_code' => 673
            ],
            [
                'name' => 'Bulgária',
                'iso_code' => 'BG',
                'iso_code3' => 'BGR',
                'phone_code' => 359
            ],
            [
                'name' => 'Burkina Faso',
                'iso_code' => 'BF',
                'iso_code3' => 'BFA',
                'phone_code' => 226
            ],
            [
                'name' => 'Myanmar (Burma)',
                'iso_code' => 'MM',
                'iso_code3' => 'MMR',
                'phone_code' => 95
            ],
            [
                'name' => 'Burundi',
                'iso_code' => 'BI',
                'iso_code3' => 'BDI',
                'phone_code' => 257
            ],
            [
                'name' => 'Camarões',
                'iso_code' => 'CM',
                'iso_code3' => 'CMR',
                'phone_code' => 237
            ],
            [
                'name' => 'Cabo Verde',
                'iso_code' => 'CV',
                'iso_code3' => 'CPV',
                'phone_code' => 238
            ],
            [
                'name' => 'Camboja',
                'iso_code' => 'KH',
                'iso_code3' => 'KHM',
                'phone_code' => 855
            ],
            [
                'name' => 'Canadá',
                'iso_code' => 'CA',
                'iso_code3' => 'CAN',
                'phone_code' => 1
            ],
            [
                'name' => 'Catar',
                'iso_code' => 'QA',
                'iso_code3' => 'QAT',
                'phone_code' => 974
            ],
            [
                'name' => 'Chad',
                'iso_code' => 'TD',
                'iso_code3' => 'TCD',
                'phone_code' => 235
            ],
            [
                'name' => 'Chile',
                'iso_code' => 'CL',
                'iso_code3' => 'CHL',
                'phone_code' => 56
            ],
            [
                'name' => 'China',
                'iso_code' => 'CN',
                'iso_code3' => 'CHN',
                'phone_code' => 86
            ],
            [
                'name' => 'Chipre',
                'iso_code' => 'CY',
                'iso_code3' => 'CYP',
                'phone_code' => 357
            ],
            [
                'name' => 'Christmas Island',
                'iso_code' => 'CX',
                'iso_code3' => 'CXR',
                'phone_code' => 61
            ],
            [
                'name' => 'Cingapura',
                'iso_code' => 'SG',
                'iso_code3' => 'SGP',
                'phone_code' => 65
            ],
            [
                'name' => 'Colômbia',
                'iso_code' => 'CO',
                'iso_code3' => 'COL',
                'phone_code' => 57
            ],
            [
                'name' => 'Comores',
                'iso_code' => 'KM',
                'iso_code3' => 'COM',
                'phone_code' => 269
            ],
            [
                'name' => 'Coreia do Norte',
                'iso_code' => 'KP',
                'iso_code3' => 'PRK',
                'phone_code' => 850
            ],
            [
                'name' => 'Coreia do Sul',
                'iso_code' => 'KR',
                'iso_code3' => 'KOR',
                'phone_code' => 82
            ],
            [
                'name' => 'Costa do Marfim',
                'iso_code' => 'CI',
                'iso_code3' => 'CIV',
                'phone_code' => 225
            ],
            [
                'name' => 'Costa Rica',
                'iso_code' => 'CR',
                'iso_code3' => 'CRC',
                'phone_code' => 506
            ],
            [
                'name' => 'Croácia',
                'iso_code' => 'HR',
                'iso_code3' => 'HRV',
                'phone_code' => 385
            ],
            [
                'name' => 'Cuba',
                'iso_code' => 'CU',
                'iso_code3' => 'CUB',
                'phone_code' => 53
            ],
            [
                'name' => 'Dinamarca',
                'iso_code' => 'DK',
                'iso_code3' => 'DNK',
                'phone_code' => 45
            ],
            [
                'name' => 'Djibouti',
                'iso_code' => 'DJ',
                'iso_code3' => 'DJI',
                'phone_code' => 253
            ],
            [
                'name' => 'Dominica',
                'iso_code' => 'DM',
                'iso_code3' => 'DMA',
                'phone_code' => 1767
            ],
            [
                'name' => 'Egito',
                'iso_code' => 'EG',
                'iso_code3' => 'EGY',
                'phone_code' => 20
            ],
            [
                'name' => 'El Salvador',
                'iso_code' => 'SV',
                'iso_code3' => 'SLV',
                'phone_code' => 503
            ],
            [
                'name' => 'Emirados Árabes Unidos',
                'iso_code' => 'AE',
                'iso_code3' => 'ARE',
                'phone_code' => 971
            ],
            [
                'name' => 'Equador',
                'iso_code' => 'EC',
                'iso_code3' => 'ECU',
                'phone_code' => 593
            ],
            [
                'name' => 'Eritreia',
                'iso_code' => 'ER',
                'iso_code3' => 'ERI',
                'phone_code' => 291
            ],
            [
                'name' => 'Estónia',
                'iso_code' => 'EE',
                'iso_code3' => 'EST',
                'phone_code' => 372
            ],
            [
                'name' => 'Espanha',
                'iso_code' => 'ES',
                'iso_code3' => 'ESP',
                'phone_code' => 34
            ],
            [
                'name' => 'Etiópia',
                'iso_code' => 'ET',
                'iso_code3' => 'ETH',
                'phone_code' => 251
            ],
            [
                'name' => 'Fiji',
                'iso_code' => 'FJ',
                'iso_code3' => 'FJI',
                'phone_code' => 679
            ],
            [
                'name' => 'Finlândia',
                'iso_code' => 'FI',
                'iso_code3' => 'FIN',
                'phone_code' => 358
            ],
            [
                'name' => 'França',
                'iso_code' => 'FR',
                'iso_code3' => 'FRA',
                'phone_code' => 33
            ],
            [
                'name' => 'Gabão',
                'iso_code' => 'GA',
                'iso_code3' => 'GAB',
                'phone_code' => 241
            ],
            [
                'name' => 'Gâmbia',
                'iso_code' => 'GM',
                'iso_code3' => 'GMB',
                'phone_code' => 220
            ],
            [
                'name' => 'Banda de Gaza (Palestina)',
                'iso_code' => '',
                'iso_code3' => '',
                'phone_code' => 970
            ],
            [
                'name' => 'Geórgia',
                'iso_code' => 'GE',
                'iso_code3' => 'GEO',
                'phone_code' => 995
            ],
            [
                'name' => 'Gana',
                'iso_code' => 'GH',
                'iso_code3' => 'GHA',
                'phone_code' => 233
            ],
            [
                'name' => 'Gibraltar',
                'iso_code' => 'GI',
                'iso_code3' => 'GIB',
                'phone_code' => 350
            ],
            [
                'name' => 'Grécia',
                'iso_code' => 'GR',
                'iso_code3' => 'GRC',
                'phone_code' => 30
            ],
            [
                'name' => 'Groelândia',
                'iso_code' => 'GL',
                'iso_code3' => 'GRL',
                'phone_code' => 299
            ],
            [
                'name' => 'Granada',
                'iso_code' => 'GD',
                'iso_code3' => 'GRD',
                'phone_code' => 1473
            ],
            [
                'name' => 'Guam',
                'iso_code' => 'GU',
                'iso_code3' => 'GUM',
                'phone_code' => 1671
            ],
            [
                'name' => 'Guatemala',
                'iso_code' => 'GT',
                'iso_code3' => 'GTM',
                'phone_code' => 502
            ],
            [
                'name' => 'Guiana',
                'iso_code' => 'GY',
                'iso_code3' => 'GUY',
                'phone_code' => 592
            ],
            [
                'name' => 'Guiné',
                'iso_code' => 'GN',
                'iso_code3' => 'GIN',
                'phone_code' => 224
            ],
            [
                'name' => 'Guiné Equatorial',
                'iso_code' => 'GQ',
                'iso_code3' => 'GNQ',
                'phone_code' => 240
            ],
            [
                'name' => 'Guiné-Bissau',
                'iso_code' => 'GW',
                'iso_code3' => 'GNB',
                'phone_code' => 245
            ],
            [
                'name' => 'Haiti',
                'iso_code' => 'HT',
                'iso_code3' => 'HTI',
                'phone_code' => 509
            ],
            [
                'name' => 'Honduras',
                'iso_code' => 'HN',
                'iso_code3' => 'HND',
                'phone_code' => 504
            ],
            [
                'name' => 'Hong Kong',
                'iso_code' => 'HK',
                'iso_code3' => 'HKG',
                'phone_code' => 852
            ],
            [
                'name' => 'Hungria',
                'iso_code' => 'HU',
                'iso_code3' => 'HUN',
                'phone_code' => 36
            ],
            [
                'name' => 'Islândia',
                'iso_code' => 'IS',
                'iso_code3' => '" IS"',
                'phone_code' => 354
            ],
            [
                'name' => 'Ilhas Cayman',
                'iso_code' => 'KY',
                'iso_code3' => 'CYM',
                'phone_code' => 1345
            ],
            [
                'name' => 'Ilhas Cocos (Keeling)',
                'iso_code' => 'CC',
                'iso_code3' => 'CCK',
                'phone_code' => 61
            ],
            [
                'name' => 'Ilha de Man',
                'iso_code' => 'IM',
                'iso_code3' => 'IMN',
                'phone_code' => 44
            ],
            [
                'name' => 'Ilhas Cook',
                'iso_code' => 'CK',
                'iso_code3' => 'COK',
                'phone_code' => 682
            ],
            [
                'name' => 'Ilhas Falkland (Malvinas)',
                'iso_code' => 'FK',
                'iso_code3' => 'FLK',
                'phone_code' => 500
            ],
            [
                'name' => 'Ilhas Feroé',
                'iso_code' => 'FO',
                'iso_code3' => 'FRO',
                'phone_code' => 298
            ],
            [
                'name' => 'Ilhas Mariana do Norte',
                'iso_code' => 'MP',
                'iso_code3' => 'MNP',
                'phone_code' => 1670
            ],
            [
                'name' => 'Ilhas Marshall',
                'iso_code' => 'MH',
                'iso_code3' => 'MHL',
                'phone_code' => 692
            ],
            [
                'name' => 'Ilhas Norfolk',
                'iso_code' => 672,
                'iso_code3' => 'NFK',
                'phone_code' => 672
            ],
            [
                'name' => 'Ilhas Pitcairn',
                'iso_code' => 'PN',
                'iso_code3' => 'PCN',
                'phone_code' => 870
            ],
            [
                'name' => 'Ilhas Salomão',
                'iso_code' => 'SB',
                'iso_code3' => 'SLB',
                'phone_code' => 677
            ],
            [
                'name' => 'Ilhas Turcas e Caicos',
                'iso_code' => 'TC',
                'iso_code3' => 'TCA',
                'phone_code' => 1649
            ],
            [
                'name' => 'Ilhas Virgens Americanas',
                'iso_code' => 'VI',
                'iso_code3' => 'VIR',
                'phone_code' => 1340
            ],
            [
                'name' => 'Ilhas Virgens Britânicas',
                'iso_code' => 'VG',
                'iso_code3' => 'VGB',
                'phone_code' => 1284
            ],
            [
                'name' => 'India',
                'iso_code' => 'IN',
                'iso_code3' => 'IND',
                'phone_code' => 91
            ],
            [
                'name' => 'Indonésia',
                'iso_code' => 'ID',
                'iso_code3' => 'IDN',
                'phone_code' => 62
            ],
            [
                'name' => 'Inglaterra (Reino Unido)',
                'iso_code' => 'GB',
                'iso_code3' => 'GBR',
                'phone_code' => 44
            ],
            [
                'name' => 'Irã',
                'iso_code' => 'IR',
                'iso_code3' => 'IRN',
                'phone_code' => 98
            ],
            [
                'name' => 'Iraque',
                'iso_code' => 'IQ',
                'iso_code3' => 'IRQ',
                'phone_code' => 964
            ],
            [
                'name' => 'Irlanda',
                'iso_code' => 'IE',
                'iso_code3' => 'IRL',
                'phone_code' => 353
            ],
            [
                'name' => 'Israel',
                'iso_code' => 'IL',
                'iso_code3' => 'ISR',
                'phone_code' => 972
            ],
            [
                'name' => 'Itália',
                'iso_code' => 'IT',
                'iso_code3' => 'ITA',
                'phone_code' => 39
            ],
            [
                'name' => 'Jamaica',
                'iso_code' => 'JM',
                'iso_code3' => 'JAM',
                'phone_code' => 1876
            ],
            [
                'name' => 'Japão',
                'iso_code' => 'JP',
                'iso_code3' => 'JPN',
                'phone_code' => 81
            ],
            [
                'name' => 'Jersey',
                'iso_code' => 'JE',
                'iso_code3' => 'JEY',
                'phone_code' => ''
            ],
            [
                'name' => 'Jordânia',
                'iso_code' => 'JO',
                'iso_code3' => 'JOR',
                'phone_code' => 962
            ],
            [
                'name' => 'Cazaquistão',
                'iso_code' => 'KZ',
                'iso_code3' => 'KAZ',
                'phone_code' => 7
            ],
            [
                'name' => 'Quénia (Kenya)',
                'iso_code' => 'KE',
                'iso_code3' => 'KEN',
                'phone_code' => 254
            ],
            [
                'name' => 'Kiribati',
                'iso_code' => 'KI',
                'iso_code3' => 'KIR',
                'phone_code' => 686
            ],
            [
                'name' => 'Kosovo',
                'iso_code' => '',
                'iso_code3' => '',
                'phone_code' => 381
            ],
            [
                'name' => 'Kuwait',
                'iso_code' => 'KW',
                'iso_code3' => 'KWT',
                'phone_code' => 965
            ],
            [
                'name' => 'Quirguistão',
                'iso_code' => 'KG',
                'iso_code3' => 'KGZ',
                'phone_code' => 996
            ],
            [
                'name' => 'Laos',
                'iso_code' => 'LA',
                'iso_code3' => 'LAO',
                'phone_code' => 856
            ],
            [
                'name' => 'Letônia',
                'iso_code' => 'LV',
                'iso_code3' => 'LVA',
                'phone_code' => 371
            ],
            [
                'name' => 'Líbano',
                'iso_code' => 'LB',
                'iso_code3' => 'LBN',
                'phone_code' => 961
            ],
            [
                'name' => 'Lesoto',
                'iso_code' => 'LS',
                'iso_code3' => 'LSO',
                'phone_code' => 266
            ],
            [
                'name' => 'Libéria',
                'iso_code' => 'LR',
                'iso_code3' => 'LBR',
                'phone_code' => 231
            ],
            [
                'name' => 'Líbia',
                'iso_code' => 'LY',
                'iso_code3' => 'LBY',
                'phone_code' => 218
            ],
            [
                'name' => 'Liechtenstein',
                'iso_code' => 'LI',
                'iso_code3' => 'LIE',
                'phone_code' => 423
            ],
            [
                'name' => 'Lituânia',
                'iso_code' => 'LT',
                'iso_code3' => 'LTU',
                'phone_code' => 370
            ],
            [
                'name' => 'Luxemburgo',
                'iso_code' => 'LU',
                'iso_code3' => 'LUX',
                'phone_code' => 352
            ],
            [
                'name' => 'Macau',
                'iso_code' => 'MO',
                'iso_code3' => 'MAC',
                'phone_code' => 853
            ],
            [
                'name' => 'Macedónia',
                'iso_code' => 'MK',
                'iso_code3' => 'MKD',
                'phone_code' => 389
            ],
            [
                'name' => 'Madagáscar',
                'iso_code' => 'MG',
                'iso_code3' => 'MDG',
                'phone_code' => 261
            ],
            [
                'name' => 'Malawi',
                'iso_code' => 'MW',
                'iso_code3' => 'MWI',
                'phone_code' => 265
            ],
            [
                'name' => 'Malásia',
                'iso_code' => 'MY',
                'iso_code3' => 'MYS',
                'phone_code' => 60
            ],
            [
                'name' => 'Maldivas',
                'iso_code' => 'MV',
                'iso_code3' => 'MDV',
                'phone_code' => 960
            ],
            [
                'name' => 'Mali',
                'iso_code' => 'ML',
                'iso_code3' => 'MLI',
                'phone_code' => 223
            ],
            [
                'name' => 'Malta',
                'iso_code' => 'MT',
                'iso_code3' => 'MLT',
                'phone_code' => 356
            ],
            [
                'name' => 'Mauritânia',
                'iso_code' => 'MR',
                'iso_code3' => 'MRT',
                'phone_code' => 222
            ],
            [
                'name' => 'Maurícia',
                'iso_code' => 'MU',
                'iso_code3' => 'MUS',
                'phone_code' => 230
            ],
            [
                'name' => 'Mayotte',
                'iso_code' => 'YT',
                'iso_code3' => 'MYT',
                'phone_code' => 262
            ],
            [
                'name' => 'México',
                'iso_code' => 'MX',
                'iso_code3' => 'MEX',
                'phone_code' => 52
            ],
            [
                'name' => 'Micronésia',
                'iso_code' => 'FM',
                'iso_code3' => 'FSM',
                'phone_code' => 691
            ],
            [
                'name' => 'Moldávia',
                'iso_code' => 'MD',
                'iso_code3' => 'MDA',
                'phone_code' => 373
            ],
            [
                'name' => 'Monaco',
                'iso_code' => 'MC',
                'iso_code3' => 'MCO',
                'phone_code' => 377
            ],
            [
                'name' => 'Mongólia',
                'iso_code' => 'MN',
                'iso_code3' => 'MNG',
                'phone_code' => 976
            ],
            [
                'name' => 'Montenegro',
                'iso_code' => 'ME',
                'iso_code3' => 'MNE',
                'phone_code' => 382
            ],
            [
                'name' => 'Montserrat',
                'iso_code' => 'MS',
                'iso_code3' => 'MSR',
                'phone_code' => 1664
            ],
            [
                'name' => 'Marrocos',
                'iso_code' => 'MA',
                'iso_code3' => 'MAR',
                'phone_code' => 212
            ],
            [
                'name' => 'Moçambique',
                'iso_code' => 'MZ',
                'iso_code3' => 'MOZ',
                'phone_code' => 258
            ],
            [
                'name' => 'Namíbia',
                'iso_code' => 'NA',
                'iso_code3' => 'NAM',
                'phone_code' => 264
            ],
            [
                'name' => 'Nauru',
                'iso_code' => 'NR',
                'iso_code3' => 'NRU',
                'phone_code' => 674
            ],
            [
                'name' => 'Nepal',
                'iso_code' => 'NP',
                'iso_code3' => 'NPL',
                'phone_code' => 977
            ],
            [
                'name' => 'Netherlands Antilles',
                'iso_code' => 'AN',
                'iso_code3' => 'ANT',
                'phone_code' => 599
            ],
            [
                'name' => 'Nova Caledônia',
                'iso_code' => 'NC',
                'iso_code3' => 'NCL',
                'phone_code' => 687
            ],
            [
                'name' => 'Nova Zelândia',
                'iso_code' => 'NZ',
                'iso_code3' => 'NZL',
                'phone_code' => 64
            ],
            [
                'name' => 'Nicaragua',
                'iso_code' => 'NI',
                'iso_code3' => 'NIC',
                'phone_code' => 505
            ],
            [
                'name' => 'Níger',
                'iso_code' => 'NE',
                'iso_code3' => 'NER',
                'phone_code' => 227
            ],
            [
                'name' => 'Nigéria',
                'iso_code' => 'NG',
                'iso_code3' => 'NGA',
                'phone_code' => 234
            ],
            [
                'name' => 'Niue',
                'iso_code' => 'NU',
                'iso_code3' => 'NIU',
                'phone_code' => 683
            ],
            [
                'name' => 'Noruega',
                'iso_code' => 'NO',
                'iso_code3' => 'NOR',
                'phone_code' => 47
            ],
            [
                'name' => 'Omã',
                'iso_code' => 'OM',
                'iso_code3' => 'OMN',
                'phone_code' => 968
            ],
            [
                'name' => 'Países Baixos',
                'iso_code' => 'NL',
                'iso_code3' => 'NLD',
                'phone_code' => 31
            ],
            [
                'name' => 'Paquistão',
                'iso_code' => 'PK',
                'iso_code3' => 'PAK',
                'phone_code' => 92
            ],
            [
                'name' => 'Palau',
                'iso_code' => 'PW',
                'iso_code3' => 'PLW',
                'phone_code' => 680
            ],
            [
                'name' => 'Panamá',
                'iso_code' => 'PA',
                'iso_code3' => 'PAN',
                'phone_code' => 507
            ],
            [
                'name' => 'Papua-Nova Guiné',
                'iso_code' => 'PG',
                'iso_code3' => 'PNG',
                'phone_code' => 675
            ],
            [
                'name' => 'Paraguai',
                'iso_code' => 'PY',
                'iso_code3' => 'PRY',
                'phone_code' => 595
            ],
            [
                'name' => 'Peru',
                'iso_code' => 'PE',
                'iso_code3' => 'PER',
                'phone_code' => 51
            ],
            [
                'name' => 'Filipinas',
                'iso_code' => 'PH',
                'iso_code3' => 'PHL',
                'phone_code' => 63
            ],
            [
                'name' => 'Polónia',
                'iso_code' => 'PL',
                'iso_code3' => 'POL',
                'phone_code' => 48
            ],
            [
                'name' => 'Polinésia Francesa',
                'iso_code' => 'PF',
                'iso_code3' => 'PYF',
                'phone_code' => 689
            ],
            [
                'name' => 'Portugal',
                'iso_code' => 'PT',
                'iso_code3' => 'PRT',
                'phone_code' => 351
            ],
            [
                'name' => 'Porto Rico',
                'iso_code' => 'PR',
                'iso_code3' => 'PRI',
                'phone_code' => 1
            ],
            [
                'name' => 'República do Congo',
                'iso_code' => 'CG',
                'iso_code3' => 'COG',
                'phone_code' => 242
            ],
            [
                'name' => 'República Democrática do Congo',
                'iso_code' => 'CD',
                'iso_code3' => 'COD',
                'phone_code' => 243
            ],
            [
                'name' => 'República Centro-Africana',
                'iso_code' => 'CF',
                'iso_code3' => 'CAF',
                'phone_code' => 236
            ],
            [
                'name' => 'República Checa',
                'iso_code' => 'CZ',
                'iso_code3' => 'CZE',
                'phone_code' => 420
            ],
            [
                'name' => 'República Dominicana',
                'iso_code' => 'DO',
                'iso_code3' => 'DOM',
                'phone_code' => 1809
            ],
            [
                'name' => 'Roménia',
                'iso_code' => 'RO',
                'iso_code3' => 'ROU',
                'phone_code' => 40
            ],
            [
                'name' => 'Ruanda',
                'iso_code' => 'RW',
                'iso_code3' => 'RWA',
                'phone_code' => 250
            ],
            [
                'name' => 'Rússia',
                'iso_code' => 'RU',
                'iso_code3' => 'RUS',
                'phone_code' => 7
            ],
            [
                'name' => 'Saint Barthelemy',
                'iso_code' => 'BL',
                'iso_code3' => 'BLM',
                'phone_code' => 590
            ],
            [
                'name' => 'Samoa',
                'iso_code' => 'WS',
                'iso_code3' => 'WSM',
                'phone_code' => 685
            ],
            [
                'name' => 'Samoa Americana',
                'iso_code' => 'AS',
                'iso_code3' => 'ASM',
                'phone_code' => 1684
            ],
            [
                'name' => 'San Marino',
                'iso_code' => 'SM',
                'iso_code3' => 'SMR',
                'phone_code' => 378
            ],
            [
                'name' => 'Sao Tome e Principe',
                'iso_code' => 'ST',
                'iso_code3' => 'STP',
                'phone_code' => 239
            ],
            [
                'name' => 'Senegal',
                'iso_code' => 'SN',
                'iso_code3' => 'SEN',
                'phone_code' => 221
            ],
            [
                'name' => 'Serbia',
                'iso_code' => 'RS',
                'iso_code3' => 'SRB',
                'phone_code' => 381
            ],
            [
                'name' => 'Serra Leoa',
                'iso_code' => 'SL',
                'iso_code3' => 'SLE',
                'phone_code' => 232
            ],
            [
                'name' => 'Seychelles',
                'iso_code' => 'SC',
                'iso_code3' => 'SYC',
                'phone_code' => 248
            ],
            [
                'name' => 'Slovakia',
                'iso_code' => 'SK',
                'iso_code3' => 'SVK',
                'phone_code' => 421
            ],
            [
                'name' => 'Slovenia',
                'iso_code' => 'SI',
                'iso_code3' => 'SVN',
                'phone_code' => 386
            ],
            [
                'name' => 'Somalia',
                'iso_code' => 'SO',
                'iso_code3' => 'SOM',
                'phone_code' => 252
            ],
            [
                'name' => 'Sri Lanka',
                'iso_code' => 'LK',
                'iso_code3' => 'LKA',
                'phone_code' => 94
            ],
            [
                'name' => 'Saint Helena',
                'iso_code' => 'SH',
                'iso_code3' => 'SHN',
                'phone_code' => 290
            ],
            [
                'name' => 'Saint Kitts and Nevis',
                'iso_code' => 'KN',
                'iso_code3' => 'KNA',
                'phone_code' => 1869
            ],
            [
                'name' => 'Saint Lucia',
                'iso_code' => 'LC',
                'iso_code3' => 'LCA',
                'phone_code' => 1758
            ],
            [
                'name' => 'Saint Martin',
                'iso_code' => 'MF',
                'iso_code3' => 'MAF',
                'phone_code' => 1599
            ],
            [
                'name' => 'Saint Pierre and Miquelon',
                'iso_code' => 'PM',
                'iso_code3' => 'SPM',
                'phone_code' => 508
            ],
            [
                'name' => 'Saint Vincent and the Grenadines',
                'iso_code' => 'VC',
                'iso_code3' => 'VCT',
                'phone_code' => 1784
            ],
            [
                'name' => 'Sudão',
                'iso_code' => 'SD',
                'iso_code3' => 'SDN',
                'phone_code' => 249
            ],
            [
                'name' => 'Suriname',
                'iso_code' => 'SR',
                'iso_code3' => 'SUR',
                'phone_code' => 597
            ],
            [
                'name' => 'Svalbard',
                'iso_code' => 'SJ',
                'iso_code3' => 'SJM',
                'phone_code' => ''
            ],
            [
                'name' => 'Suazilândia',
                'iso_code' => 'SZ',
                'iso_code3' => 'SWZ',
                'phone_code' => 268
            ],
            [
                'name' => 'Suécia',
                'iso_code' => 'SE',
                'iso_code3' => 'SWE',
                'phone_code' => 46
            ],
            [
                'name' => 'Suiça',
                'iso_code' => 'CH',
                'iso_code3' => 'CHE',
                'phone_code' => 41
            ],
            [
                'name' => 'Syria',
                'iso_code' => 'SY',
                'iso_code3' => 'SYR',
                'phone_code' => 963
            ],
            [
                'name' => 'Taiwan',
                'iso_code' => 'TW',
                'iso_code3' => 'TWN',
                'phone_code' => 886
            ],
            [
                'name' => 'Tajiquistão',
                'iso_code' => 'TJ',
                'iso_code3' => 'TJK',
                'phone_code' => 992
            ],
            [
                'name' => 'Tanzânia',
                'iso_code' => 'TZ',
                'iso_code3' => 'TZA',
                'phone_code' => 255
            ],
            [
                'name' => 'Timor-Leste',
                'iso_code' => 'TL',
                'iso_code3' => 'TLS',
                'phone_code' => 670
            ],
            [
                'name' => 'Tailândia',
                'iso_code' => 'TH',
                'iso_code3' => 'THA',
                'phone_code' => 66
            ],
            [
                'name' => 'Togo',
                'iso_code' => 'TG',
                'iso_code3' => 'TGO',
                'phone_code' => 228
            ],
            [
                'name' => 'Tokelau',
                'iso_code' => 'TK',
                'iso_code3' => 'TKL',
                'phone_code' => 690
            ],
            [
                'name' => 'Tonga',
                'iso_code' => 'TO',
                'iso_code3' => 'TON',
                'phone_code' => 676
            ],
            [
                'name' => 'Trinidad e Tobago',
                'iso_code' => 'TT',
                'iso_code3' => 'TTO',
                'phone_code' => 1868
            ],
            [
                'name' => 'Tunísia',
                'iso_code' => 'TN',
                'iso_code3' => 'TUN',
                'phone_code' => 216
            ],
            [
                'name' => 'Turquemenistão',
                'iso_code' => 'TM',
                'iso_code3' => 'TKM',
                'phone_code' => 993
            ],
            [
                'name' => 'Turquia',
                'iso_code' => 'TR',
                'iso_code3' => 'TUR',
                'phone_code' => 90
            ],
            [
                'name' => 'Tuvalu',
                'iso_code' => 'TV',
                'iso_code3' => 'TUV',
                'phone_code' => 688
            ],
            [
                'name' => 'Uganda',
                'iso_code' => 'UG',
                'iso_code3' => 'UGA',
                'phone_code' => 256
            ],
            [
                'name' => 'Ucrânia',
                'iso_code' => 'UA',
                'iso_code3' => 'UKR',
                'phone_code' => 380
            ],
            [
                'name' => 'Uruguai',
                'iso_code' => 'UY',
                'iso_code3' => 'URY',
                'phone_code' => 598
            ],
            [
                'name' => 'Estados Unidos (EUA)',
                'iso_code' => 'US',
                'iso_code3' => 'USA',
                'phone_code' => 1
            ],
            [
                'name' => 'Uzbequistão',
                'iso_code' => 'UZ',
                'iso_code3' => 'UZB',
                'phone_code' => 998
            ],
            [
                'name' => 'Vanuatu',
                'iso_code' => 'VU',
                'iso_code3' => 'VUT',
                'phone_code' => 678
            ],
            [
                'name' => 'Vaticano',
                'iso_code' => 'VA',
                'iso_code3' => 'VAT',
                'phone_code' => 39
            ],
            [
                'name' => 'Venezuela',
                'iso_code' => 'VE',
                'iso_code3' => 'VEN',
                'phone_code' => 58
            ],
            [
                'name' => 'Vietnã (Vietname)',
                'iso_code' => 'VN',
                'iso_code3' => 'VNM',
                'phone_code' => 84
            ],
            [
                'name' => 'Wallis e Futuna',
                'iso_code' => 'WF',
                'iso_code3' => 'WLF',
                'phone_code' => 681
            ],
            [
                'name' => 'West Bank',
                'iso_code' => '',
                'iso_code3' => '',
                'phone_code' => 970
            ],
            [
                'name' => 'Western Sahara',
                'iso_code' => 'EH',
                'iso_code3' => 'ESH',
                'phone_code' => ''
            ],
            [
                'name' => 'Iémen (Iémen, Yemen)',
                'iso_code' => 'YE',
                'iso_code3' => 'YEM',
                'phone_code' => 967
            ],
            [
                'name' => 'Zimbabwe(Zimbabué)',
                'iso_code' => 'ZW',
                'iso_code3' => 'ZWE',
                'phone_code' => 263
            ],
            [
                'name' => 'Zâmbia',
                'iso_code' => 'ZM',
                'iso_code3' => 'ZMB',
                'phone_code' => 260
            ]
        ];

        foreach ($countries as $country) {
            Country::create($country);
        }

    }
}
