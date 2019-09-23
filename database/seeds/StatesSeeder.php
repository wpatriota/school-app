<?php

use Illuminate\Database\Seeder;

class StatesSeeder extends Seeder
{
    /**
     * PARA EXECUTAR:
     * php artisan db:seed --class=StatesSeeder
     *
     * @return void
     */
    public function run()
    {
        \DB::table('uf')->insert(array (
            0 =>
            array (
                'id' => '1',
                'nome' => 'Acre',
                'sigla' => 'AC'
            ),
            1 =>
            array (
                'id' => '2',
                'nome' => 'Alagoas',
                'sigla' => 'AL'
            ),
            2 =>
            array (
                'id' => '3',
                'nome' => 'Amazonas',
                'sigla' => 'AM'
            ),
            3 =>
            array (
                'id' => '4',
                'nome' => 'Amapá',
                'sigla' => 'AP'
            ),
            4 =>
            array (
                'id' => '5',
                'nome' => 'Bahia',
                'sigla' => 'BA'
            ),
            5 =>
            array (
                'id' => '6',
                'nome' => 'Ceará',
                'sigla' => 'CE'
            ),
            6 =>
            array (
                'id' => '7',
                'nome' => 'Distrito Federal',
                'sigla' => 'DF'
            ),
            7 =>
            array (
                'id' => '8',
                'nome' => 'Espírito Santo',
                'sigla' => 'ES'
            ),
            8 =>
            array (
                'id' => '9',
                'nome' => 'Goiás',
                'sigla' => 'GO'
            ),
            9 =>
            array (
                'id' => '10',
                'nome' => 'Maranhão',
                'sigla' => 'MA'
            ),
            10 =>
            array (
                'id' => '11',
                'nome' => 'Minas Gerais',
                'sigla' => 'MG'
            ),
            11 =>
            array (
                'id' => '12',
                'nome' => 'Mato Grosso do Sul',
                'sigla' => 'MS'
            ),
            12 =>
            array (
                'id' => '13',
                'nome' => 'Mato Grosso',
                'sigla' => 'MT'
            ),
            13 =>
            array (
                'id' => '14',
                'nome' => 'Pará',
                'sigla' => 'PA'
            ),
            14 =>
            array (
                'id' => '15',
                'nome' => 'Paraiba',
                'sigla' => 'PB'
            ),
            15 =>
            array (
                'id' => '16',
                'nome' => 'Pernambuco',
                'sigla' => 'PE'
            ),
            16 =>
            array (
                'id' => '17',
                'nome' => 'Piauí',
                'sigla' => 'PI'
            ),
            17 =>
            array (
                'id' => '18',
                'nome' => 'Paraná',
                'sigla' => 'PR'
            ),
            18 =>
            array (
                'id' => '19',
                'nome' => 'Rio de Janeiro',
                'sigla' => 'RJ'
            ),
            19 =>
            array (
                'id' => '20',
                'nome' => 'Rio Grande do Norte',
                'sigla' => 'RN'
            ),
            20 =>
            array (
                'id' => '21',
                'nome' => 'Rondônia',
                'sigla' => 'RO'
            ),
            21 =>
            array (
                'id' => '22',
                'nome' => 'Roraima',
                'sigla' => 'RR'
            ),
            22 =>
            array (
                'id' => '23',
                'nome' => 'Rio Grande do Sul',
                'sigla' => 'RS'
            ),
            23 =>
            array (
                'id' => '24',
                'nome' => 'Santa Catarina',
                'sigla' => 'SC'
            ),
            24 =>
            array (
                'id' => '25',
                'nome' => 'Sergipe',
                'sigla' => 'SE'
            ),
            25 =>
            array (
                'id' => '26',
                'nome' => 'São Paulo',
                'sigla' => 'SP'
            ),
            26 =>
            array (
                'id' => '27',
                'nome' => 'Tocantins',
                'sigla' => 'TO'
            ),
        ));
    }
}
