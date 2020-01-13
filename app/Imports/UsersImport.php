<?php

namespace tenda\Imports;

use tenda\User;
use tenda\Individuo;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $user = new User([
            'name'     => $row[0],
            'email'    => $row[1], 
            'password' => \Hash::make('secret'),
        ]);

        $user->save();

        return new Individuo([
            'user_id' => $user->id,            
            'nome' => $row[0],
            'sobrenome' => ' ',
            'telefone' => ' ',
            'endereco' => $row[1],
            'bairro' => $row[2],
            'cidade' => $row[3],
            'cep' => ' ',
            'data_nascimento' => date('Y-m-d', strtotime($row[4])),
            'naturalidade' => $row[5],
            'nacionalidade' => $row[6],
            'profissao' => $row[7],
            'grau_instrucao' => $row[8],
            'estado_civil' => $row[9],
            'cpf' => $row[10],
            'rg' => $row[11],
            'email' => $row[12],
            'contato_emergencia' => $row[15],            
            'doenca' => $row[17],
            'remedio' => $row[19],
            'alergia' => $row[21],            
        ]);
    }
}
