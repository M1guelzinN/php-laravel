<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function fornecedores(){
        $fornecedores =[
            0 => [
                'nome' => 'fornecedor 1',
                'disponivel' => 'N',
                'CNPJ' => '0000210210-56',
                'telefone' => [
                    'ddd' => '85',
                    'numero' => '1111-2345'
                ]
            ],
            1 => [
                'nome' => 'fornecedor 2',
                'disponivel' => 'S',
                'CNPJ' => '00025350210-56',
                'telefone' => [
                    'ddd' => '13',
                    'numero' => '1111-2345'
                ]
            ],
            2 => [
                'nome' => 'fornecedor 3',
                'disponivel' => 'N',
                'CNPJ' => '0000210210-42',
                'telefone' => [
                    'ddd' => '15',
                    'numero' => '1111-2345'
                ]
            ],
            3 => [
                'nome' => 'fornecedor 4',
                'disponivel' => 'S',
                'telefone' => [
                    'ddd' => '11',
                    'numero' => '1111-2345'
                    
                ]
            ],
        ];

        // $msg = $fornecedores[3] ['CNPJ'] ? 'CNPJ informado' : 'CNPJ não informado';

        // echo $msg;

        return view('app.fornecedores.index', compact('fornecedores'));
    }
}
