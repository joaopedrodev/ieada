<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Todas as rotas 
|--------------------------------------------------------------------------
|
| Aqui é onde você pode registrar as rotas da web para o seu sistema. Esses
| as rotas são carregadas pelo RouteServiceProvider dentro de um grupo que
| contém o grupo de middleware "web". Agora crie algo ótimo!
|
*/
/*--Rotas escritas por João Pedro visite meu Github
|   Quer me contratar chame no Linkedin
|   Ou no Whatsapp +55(61)999955207
*/
Route::group(['prefix' => 'admin'], function(){
    Route::resource('/', 'App\Http\Controllers\Admin\HomeController')->middleware('auth');
    Route::resource('atas', 'App\Http\Controllers\Admin\AtaController')->middleware('auth');
    Route::resource('cadastros', 'App\Http\Controllers\Admin\CadastroController')->middleware('auth');
    Route::resource('events', 'App\Http\Controllers\Admin\EventController')->middleware('auth');
    Route::resource('users', 'App\Http\Controllers\Admin\UsersController')->middleware('auth');
    Route::resource('mensagens','App\Http\Controllers\Admin\MensagemBiblicaController')->middleware('auth');
    Route::resource('igrejas','App\Http\Controllers\Admin\BioIgrejaController')->middleware('auth');
    Route::resource('pastores','App\Http\Controllers\Admin\BioPastorController')->middleware('auth');
    Route::resource('obreiros','App\Http\Controllers\Admin\ObreirosController')->middleware('auth');
    Route::resource('galfas','App\Http\Controllers\Admin\GAlfaController')->middleware('auth');
    Route::resource('louvor','App\Http\Controllers\Admin\LouvorController')->middleware('auth');
    Route::resource('adolescentes','App\Http\Controllers\Admin\AdolescentesController')->middleware('auth');
    Route::resource('departamento','App\Http\Controllers\Admin\DepartamentoController')->middleware('auth');
    Route::resource('primicias','App\Http\Controllers\Admin\PrimiciasController')->middleware('auth');
    Route::resource('escola','App\Http\Controllers\Admin\EscolaController')->middleware('auth');
    Route::resource('obreiros','App\Http\Controllers\Admin\ObreirosController')->middleware('auth');
    Route::resource('sermoes','App\Http\Controllers\Admin\SermoesController')->middleware('auth');
    Route::resource('contato','App\Http\Controllers\Admin\ContatoController')->middleware('auth');
  
});


use App\Http\Controllers\MembrosController;
/*-ABRE ROTA DE CRIAÇÃO E CADASTRO DE MEMBROS--*/
Route::get('/membro/index', [MembrosController::class,'index'])->middleware('auth');
Route::get('/membro/create', [MembrosController::class,'create'])->middleware('auth');
Route::get('/membro/{id}', [MembrosController::class,'show']);
Route::post('/membro', [MembrosController::class,'store']);
Route::delete('/membro/{id}',[MembrosController::class,'destroy'])->middleware('auth');
Route::get('/membro/edit/{id}',[MembrosController::class,'edit'])->middleware('auth');
Route::put('/membro/update/{id}',[MembrosController::class,'update'])->middleware('auth');
/*-FECHA ROTA DE CRIAÇÃO E CADASTRO DE MEMBROS--*/

use App\Http\Controllers\MensagensController;
Route::get('/mensagens',[MensagensController::class,'index']);

use App\Http\Controllers\SomosController;
Route::get('/index',[SomosController::class,'index']);

use App\Http\Controllers\PastoresController;
Route::get('/pastores',[PastoresController::class,'index']);


use App\Http\Controllers\EventController;
Route::get('eventos',[EventController::class,'index']);

use App\Http\Controllers\GAlfaController;
Route::get('/grupo',[GAlfaController::class,'index']);

use App\Http\Controllers\LouvorController;
Route::get('/louvor',[LouvorController::class,'index']);

use App\Http\Controllers\AdolescentesController;
Route::get('/adolescentes',[AdolescentesController::class,'index']);

use App\Http\Controllers\DepartamentoController;
Route::get('/departamento',[DepartamentoController::class,'index']);

use App\Http\Controllers\PrimiciasController;
Route::get('/primicias',[PrimiciasController::class,'index']);

use App\Http\Controllers\EscolaController;
Route::get('/escola',[EscolaController::class,'index']);

use App\Http\Controllers\ObreirosController;
Route::get('/obreiros',[ObreirosController::class,'index']);

use App\Http\Controllers\SermoesController;
Route::get('/sermoes',[SermoesController::class,'index']);

use App\Http\Controllers\welcomeController;
Route::get('/',[welcomeController::class,'index']);

use App\Http\Controllers\ContatoController;
Route::get('/contato',[ContatoController::class,'index']);


Route::get('/social', function () {
    return view('social');
});

Route::get('/obrigado', function () {
    return view('obrigado');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});