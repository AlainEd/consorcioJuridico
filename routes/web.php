<?php

use App\Http\Controllers\AbogadoController;
use App\Http\Controllers\JuezController;
use App\Http\Controllers\ProcuradorController;
use App\Models\Abogado;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/usuarios', function () {
        return view('users/index');
    })->name('usuarios');

    //Usuario Juez
    Route::get('/usuario/crearUserJuez', function () {
        return view('juez/create');
    })->name('createJuez');

    Route::post('/usuario/createUserJuez', [JuezController::class, 'create'])->name('registrarJuez');

    //Usuario Abogado
    Route::get('/usuario/crearUserAbogado', function () {
        return view('abogado/create');
    })->name('createAbogado');

    Route::post('/usuario/createUserAbogado', [AbogadoController::class, 'create'])->name('registrarAbogado');

    //Usuario Procurador
    Route::get('/usuario/crearUserProcurador', function () {
        return view('procurador/create');
    })->name('createProcurador');

    Route::post('/usuario/createUserProcurador', [ProcuradorController::class, 'create'])->name('registrarProcurador');

});


