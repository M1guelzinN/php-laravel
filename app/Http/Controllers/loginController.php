<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;

class loginController extends Controller
{
    public function index(Request $request){

        $erro = '';

        if($request->get('erro') == 1){
            $erro = 'Usuario não confirmado';
        }
        if($request->get('erro') == 2){
            $erro = 'é necessario fazer o login';
        }

        return view('site.login', ['titulo' => 'login', 'erro' => $erro]);
    }

    public function autenticar(Request $request){
        $regras = [
            'usuario' => 'email',
            'senha' => 'required|min:4'
        ];
        $feedback = [
            'senha.min' => 'este campo precisa de no minimo 8 caracteres', 
            'required' => 'o campo :attribute é obrigatorio',
            'email' => 'este email não é valido',
        ];
        $request->validate($regras, $feedback);

        $email = $request->get('usuario');
        $password = $request->get('senha');

        $user = new User();

        $usuario = $user->where('email', $email)->where('password', $password)->get()->first();

        if(isset($usuario->name)){
            session_start();
            $_SESSION['nome'] = $usuario->name;
            $_SESSION['email'] = $usuario->email;

            return redirect()->route('app.home');
        } else{
           return redirect()->route('site.login', ['erro' => 1]);
        }
    }

    public function sair(){
        session_destroy();
        return redirect()->route('site.index');
    }
}
