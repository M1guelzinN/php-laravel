<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PrincipalController@Principal');

Route::get('/produto', 'ProdutosController@Produto');

Route::get('/contato', 'ContatoController@Contato');

Route::get('/sobre-nos', 'SobreNosController@SobreNos');

//app

Route::prefix('/app') ->group( function(){
  Route::get('/login', function(){
    return 'tela de login';
  });
});


// enviando parametros pela url
// Route::get('/param/{nome}/{categoria}/{idade?}/{sex?}/', 
//   function(
//     string $nome = 'desconhecido',
//     string $categoria = 'desconhecida',
//     string $idade = 'sem idade',
//     string $sexo = 'indeterminado'){
//   echo "Aqui estamos: $nome, $categoria, $idade, $sexo";
// });

// Route::get('/param/{nome}/{categoria_id}', 
//   function(
//     string $nome = 'desconhecido',
//     int $categoria_id = 1){
//   echo "Aqui estamos: $nome e $categoria_id";
// })  ->where('nome', '[A-Za-z]+')
//     ->where('categoria_id', '[0-9]+');