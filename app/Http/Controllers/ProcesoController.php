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
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Process\Process;

use function PHPSTORM_META\type;

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
        
        // $cliente = Cliente::findOrFail($proceso->id_cliente);
        // $userCliente = User::findOrFail($cliente->id_usuario);
        
        $abogado = Abogado::findOrFail($proceso->id_abogado);
        $userAbogado = User::findOrFail($abogado->id_usuario);
        
        $userJuez = "";
        $juzgado = "";
        if ($proceso->id_juez != null) {
            $juez = Juez::find($proceso->id_juez);
            $userJuez = User::find($juez->id_usuario);
            
            $juzgado = Juzgado::find($proceso->id_juzgado);
        }

        return view('procesos.show', compact('proceso', 'userAbogado', 'userJuez', 'juzgado'));
    }

    public function edit($proceso) {
        $proceso = Procesos::findOrFail($proceso);
        
        // $cliente = Cliente::findOrFail($proceso->id_cliente);
        // $userCliente = User::findOrFail($cliente->id_usuario);
        
        $abogado = Abogado::findOrFail($proceso->id_abogado);
        $userAbogado = User::findOrFail($abogado->id_usuario);
        
        $userJuez = "";
        $juzgado = "";
        if ($proceso->id_juez != null) {
            $juez = Juez::find($proceso->id_juez);
            $userJuez = User::find($juez->id_usuario);
            
            $juzgado = Juzgado::find($proceso->id_juzgado);
        }
        return view('procesos.edit', compact('proceso', 'userAbogado', 'userJuez', 'juzgado'));
    }

    public function update(StoreProceso $request, $proceso) {
        if (Auth::user()->id_rol == 2) {
            $juez = DB::table('juez')->where('juez.id_usuario', '=', Auth::user()->id)->first();

            $proceso = Procesos::findOrFail($proceso);

            $proceso->fecha = $request->fecha;
            $proceso->hora = $request->hora; 
            $proceso->id_juez = $juez->id;
            $proceso->id_juzgado = $juez->id_juzgado;
            $proceso->estado = 'En Proceso';
            $proceso->save();

            return redirect()->route('procesos.show', $proceso);
        }else{
            ;
        }
    }

    public function create() {
        return view('procesos.create');
    }

    public function store(StoreProceso $request) {
        $abogado = DB::table('abogado')->where('id_usuario', '=', Auth::user()->id)->first();

        $usuarioCliente = DB::table('users')->where('users.ci', '=', $request->ci_demandante)->first();
        if ($usuarioCliente == "") {
            $nombreDemandante = $request->nombre_demandante;
            $id_cliente = null;
        }else{ 
            $nombreDemandante = $usuarioCliente->nombre .' '. $usuarioCliente->apellido;
            $usuarioCliente = DB::table('cliente')->where('cliente.id_usuario', '=', $usuarioCliente->id)->first();
            $id_cliente = $usuarioCliente->id;
        }

        $ci_demandante = $request->ci_demandante;

        $proceso = Procesos::create([
            'nombre' => $request->nombre_proceso,
            'area' => $request->area,
            'estado' => 'Pendiente',
            'fecha' => null,
            'hora' => null,
            'fecha_cierre' => null,
            'id_abogado' => $abogado->id,
            'id_juez' => null,
            'id_cliente' => $id_cliente,
            'id_juzgado' => null,
            'nombre_demandante' => $nombreDemandante,
            'ci_demandante' => $ci_demandante,
            'nombre_demandado' => $request->nombre_demandado,
            'ci_demandado' => $request->ci_demandado,
            'determinacion' => null,
        ]);
        $proceso->save();

        return redirect()->route('procesos.index');
    }
}
