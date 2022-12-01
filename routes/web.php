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

Route::get('/',[\App\Http\Controllers\PrincipalController::class, 'print']);

Route::get('/sobre-nos',[\App\Http\Controllers\SobreNosController::class, 'print']);

Route::get('/secao-um',[\App\Http\Controllers\SecaoUmController::class, 'print']);

Route::get('/contato/{nome}', function (String $nome){
    echo 'estamos aqui ' .$nome;
}
);

Route::get('/contato', function (){
    echo 'estamos aqui';
}
);