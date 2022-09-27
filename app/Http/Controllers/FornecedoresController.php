<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fornecedores;

class FornecedoresController extends Controller
{
    public function index(){
        // $fornecedores =[
        //     0 => [
        //         'nome' => 'fornecedor 1',
        //         'disponivel' => 'N',
        //         'CNPJ' => '0000210210-56',
        //         'telefone' => [
        //             'ddd' => '85',
        //             'numero' => '1111-2345'
        //         ]
        //     ],
        //     1 => [
        //         'nome' => 'fornecedor 2',
        //         'disponivel' => 'S',
        //         'CNPJ' => '00025350210-56',
        //         'telefone' => [
        //             'ddd' => '13',
        //             'numero' => '1111-2345'
        //         ]
        //     ],
        //     2 => [
        //         'nome' => 'fornecedor 3',
        //         'disponivel' => 'N',
        //         'CNPJ' => '0000210210-42',
        //         'telefone' => [
        //             'ddd' => '15',
        //             'numero' => '1111-2345'
        //         ]
        //     ],
        //     3 => [
        //         'nome' => 'fornecedor 4',
        //         'disponivel' => 'S',
        //         'telefone' => [
        //             'ddd' => '11',
        //             'numero' => '1111-2345'
                    
        //         ]
        //     ],
        // ];

        // $msg = $fornecedores[3] ['CNPJ'] ? 'CNPJ informado' : 'CNPJ não informado';

        // echo $msg;

        return view('app.fornecedor.index');
    }

    public function adicionar(Request $request) {

        $msg = '';

        // inclusão
        if($request->input('_token') != '' && $request->input('id') == ''){
            $regra = [
                "nome" => 'required|min:5',
                "site" => 'required',
                "uf" => 'required|max:2',
                "email" => 'email',
            ];
            $feedback = [
                "required" => 'este campo é obrigatório',
                "email" => 'este email não é valido',
                "min" => 'este campo tem que ter minimo 5 caracteres',
                "max" => 'este campo só pode ter 2 caracteres',
            ];

            $request->validate($regra, $feedback);

            $fornecedores = new Fornecedores();
            $fornecedores->create($request->all());

            $msg = 'cadastro realizado com sucesso.';
        } 
        if($request->input('_token') != '' && $request->input('id') != ''){

            $fornecedor = Fornecedores::find($request->input('id'));
            $update = $fornecedor->update($request->all());

            if($update){
                $msg = 'update realizado com sucesso';
            } else{
                $msg = 'Não foi posssivel fazer o update. Tente Novamente!';
            }
            return redirect()->route('app.fornecedor.editar', ['id'=> $request->input('id') ,'msg' => $msg]);
        }
        return view('app.fornecedor.adicionar', ['msg' => $msg]);
    }

    public function listar(Request $request) {
        $fornecedores = Fornecedores::where('nome', 'like', '%'.$request->input('nome').'%')
            ->where('site', 'like', '%'.$request->input('site').'%')
            ->where('uf', 'like', '%'.$request->input('uf').'%')
            ->where('email', 'like', '%'.$request->input('email').'%')
            ->paginate(2);

        return view('app.fornecedor.listar', ['fornecedores' => $fornecedores,'request' => $request->all()]);
    }
    public function editar($id, $msg = '') {
        echo $id;
        $fornecedor = Fornecedores::find($id);

        return view('app.fornecedor.adicionar', ['fornecedor' => $fornecedor, 'msg' => $msg]);
    }
    public function excluir($id) {
        $fornecedor = Fornecedores::find($id)->delete();

        return redirect()->route('app.fornecedor');
    }
}
