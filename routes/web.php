<?php

use App\Http\Controllers\AbogadoController;
use App\Http\Controllers\CrearUsuarioController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\JuezController;
use App\Http\Controllers\ProcesoController;
use App\Http\Controllers\ProcuradorController;
use App\Http\Controllers\UsuarioController;
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

    Route::resource('usuario', UsuarioController::class);

    Route::resource('procesos', ProcesoController::class);

    Route::resource('documento', DocumentoController::class);

    Route::get('/select', function () {
        return view('users.create');
    })->name('createUser');

    //Usuario Abogado
    Route::get('/crearUserJuez', function () {
        return view('juez/create');
    })->name('createJuez');

    //Usuario Abogado
    Route::get('/crearUserAbogado', function () {
        return view('abogado/create');
    })->name('createAbogado');

    Route::post('/createUserAbogado', [AbogadoController::class, 'create'])->name('registrarAbogado');

    //Usuario Procurador
    Route::get('/crearUserProcurador', function () {
        return view('procurador/create');
    })->name('createProcurador');

    Route::post('/createUserProcurador', [ProcuradorController::class, 'create'])->name('registrarProcurador');

    //Documentacion
    //editar o añadir img
    Route::get('/createDocument/{id}', [DocumentoController::class, 'nuevo'])->name('createDocumento');

    //mostrar img
    Route::get('/show/{id}', [DocumentoController::class, 'mostrar'])->name('showDocumento');
});

// RUTA QUE MUESTRA LOS PRIMEROS REGISTROS
Route::get('nombres', 'ScrollController@index');
// RUTA PARA SCROLL INFINITO DINÁMICO
Route::get('nombres/paginacion', 'ScrollController@paginacion');
// RUTA PARA EL BUSCADOR EN TIEMPO REAL
Route::get('nombres/buscador','ScrollController@buscador');


