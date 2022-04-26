<?php

namespace App\Http\Controllers;

use App\Models\Abogado;
use App\Models\Cliente;
use App\Models\Juez;
use App\Models\Juzgado;
use App\Models\Procesos;
use App\Models\User;
use Illuminate\Http\Request;

class ProcesoController extends Controller
{
    public function index() {
        $procesos = Procesos::join('abogado', 'id_abogado', 'abogado.id')
        ->select('proceso.id', 'proceso.nombre', 'proceso.estado')
        ->get();
        return view('procesos.index', compact('procesos'))->with('i');
    }

    public function show($proceso) {
        $proceso = Procesos::findOrFail($proceso);
        
        $cliente = Cliente::findOrFail($proceso->id_cliente);
        $userCliente = User::findOrFail($cliente->id_usuario);
        
        $abogado = Abogado::findOrFail($proceso->id_abogado);
        $userAbogado = User::findOrFail($abogado->id_usuario);
        
        $userJuez = "";
        $juzgado = "";
        if ($proceso->id_juez != null) {
            $juez = Juez::find($proceso->id_juez);
            $userJuez = User::find($juez->id_usuario);
            
            $juzgado = Juzgado::find($proceso->id_juzgado);
        }

        return view('procesos.show', compact('proceso', 'userCliente', 'userAbogado', 'userJuez', 'juzgado'));
    }

    public function edit($proceso) {
        $proceso = Procesos::findOrFail($proceso);
        
        $cliente = Cliente::findOrFail($proceso->id_cliente);
        $userCliente = User::findOrFail($cliente->id_usuario);
        
        $abogado = Abogado::findOrFail($proceso->id_abogado);
        $userAbogado = User::findOrFail($abogado->id_usuario);
        
        $userJuez = "";
        $juzgado = "";
        if ($proceso->id_juez != null) {
            $juez = Juez::find($proceso->id_juez);
            $userJuez = User::find($juez->id_usuario);
            
            $juzgado = Juzgado::find($proceso->id_juzgado);
        }
        return view('procesos.edit', compact('proceso', 'userCliente', 'userAbogado', 'userJuez', 'juzgado'));
    }

    public function update() {
        
    }
}
