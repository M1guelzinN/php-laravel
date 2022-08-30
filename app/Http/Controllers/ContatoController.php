<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\site_contato;

class ContatoController extends Controller
{
    public function Contato(Request $request){

        $motivo_contatos = [
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
            'nome' => 'required|min:5 |max:40',
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required',
        ]);

        site_contato::create($request->all());
    }   
}

