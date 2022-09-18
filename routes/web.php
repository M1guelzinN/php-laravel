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

// Route::middleware(logAcessoMiddleware::class)
//   ->get('/', 'PrincipalController@Principal')
//   ->name('site.index');

Route::get('/', 'PrincipalController@Principal')->name('site.index');

Route::get('/contato', 'ContatoController@Contato')->name('site.contato');
Route::post('/contato', 'ContatoController@salvar')->name('site.contato');

Route::get('/sobre-nos', 'SobreNosController@SobreNos')->name('site.sobrenos');

Route::get('/login/{erro?}', 'loginController@index')->name('site.login')->middleware('log.acesso');
Route::post('/login', 'loginController@autenticar')->name('site.login')->middleware('log.acesso');

//app
Route::middleware('autenticacao:ldap')->prefix('/app')->group( function(){ 
  Route::get('/home','homeController@index')->name('app.home');
  Route::get('/sair','loginController@sair')->name('app.sair');
  Route::get('/cliente','clienteController@index')->name('app.cliente');
  
  Route::get('/fornecedor','FornecedoresController@index')->name('app.fornecedor');
  Route::get('/fornecedor/adicionar','FornecedoresController@adicionar')->name('app.fornecedor.adicionar');
  Route::get('/fornecedor/editar{id}/{msg?}','FornecedoresController@editar')->name('app.fornecedor.editar');
  Route::get('/fornecedor/listar','FornecedoresController@listar')->name('app.fornecedor.listar');

  Route::post('/fornecedor/adicionar','FornecedoresController@adicionar')->name('app.fornecedor.adicionar');
  Route::post('/fornecedor/listar','FornecedoresController@listar')->name('app.fornecedor.listar');

  Route::get('/produto', 'ProdutosController@Produto')->name('app.produto');
});

// rota de fallback 
Route::fallback( function(){
  echo 'esta rota não foi encontrada. <a href='.route('site.index').'>clique para pagina principal</a>';
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