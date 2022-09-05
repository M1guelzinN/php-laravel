<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\site_contato;

class ContatoController extends Controller
{
    public function Contato(Request $request){

        $motivo_contatos = [
            '0' => 'Qual o motivo do contato?',
            '1' => 'Dúvida',
            '2' => 'Elogio',
            '3' => 'Reclamação'
        ];

        // dd($request->all());
        // var_dump($_POST);

        // $contato = new site_contato();
        // $contato->nome = $request->input('nome');
        // $contato->telefone = $request->input('telefone');
        // $contato->email = $request->input('email');
        // $contato->motivo_contato = $request->input('motivo_contato');
        // $contato->mensagem = $request->input('mensagem');
        // $contato->save();

        // print_r($contato->getAttributes());
        return view('site.contato', ['motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(Request $request){
        // $contato = new site_contato();
        // $contato->create($request->all());
        $request->validate([
            'nome' => 'required|min:5 |max:40 | unique:site_contatos',
            'telefone' => 'required',
            'email' => 'email',
            'motivo_contato' => 'required',
            'mensagem' => 'required',
        ],[
            'required' => 'o campo :attribute é obrigatorio',
            'email' => 'este email não é valido',
            'nome.min' => 'este campo precisa de no minimo 3 caracteres e no maximo 40',
            'nome.max' => 'este campo precisa de no minimo 3 caracteres e no maximo 40',
            'nome.unique' => 'este usuario já existe',
        ]);

        site_contato::create($request->all());
        return redirect()->route('site.index');
    }   
}

