<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\middleware\logAcessoMiddleware;

class SobreNosController extends Controller
{
    // public function __construct(){
    //     $this->middleware(logAcessoMiddleware::class);
    // }
    public function __construct(){
        $this->middleware('log.acesso');
    }

    public function SobreNos(){
        return view('site.sobre-nos');
    }
}

