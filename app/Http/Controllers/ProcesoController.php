<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProcesoStore;
use App\Http\Requests\StoreProceso;
use App\Models\Abogado;
use App\Models\Cliente;
use App\Models\Juez;
use App\Models\Juzgado;
use App\Models\Procesos;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

    public function create() {
        return view('procesos.create');
    }

    public function store(StoreProceso $request) {
        $abogado = DB::table('abogado')->where('id_usuario', '=', Auth::user()->id)->first();
        $usuarioCliente = DB::table('users')->where('users.ci', '=', $request->ci_demandante)->first();
        $nombreDemandante = $usuarioCliente->nombre .' '. $usuarioCliente->apellido;
        $usuarioCliente = DB::table('cliente')->where('cliente.id_usuario', '=', $usuarioCliente->id)->first();

        if ($nombreDemandante == null) {
            $nombreDemandante = $request->nombre_demandante;
        }

        $proceso = Procesos::create([
            'nombre' => $request->nombre_proceso,
            'area' => $request->area,
            'estado' => 'Pendiente',
            'fecha' => null,
            'hora' => null,
            'fecha_cierre' => null,
            'id_abogado' => $abogado->id,
            'id_juez' => null,
            'id_cliente' => $usuarioCliente->id,
            'id_juzgado' => null,
            'nombre_demandante' => $nombreDemandante,
            'ci_demandante' => $request->ci_demandante,
            'nombre_demandado' => $request->nombre_demandado,
            'ci_demandado' => $request->ci_demandado,
            'determinacion' => null,
        ]);
        $proceso->save();

        return redirect()->route('procesos.index');
    }
}
