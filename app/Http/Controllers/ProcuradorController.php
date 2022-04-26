<?php

namespace App\Http\Controllers;

use App\Models\Procurador;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProcuradorController extends Controller
{
    public function create(Request $request) {
        $user = User::create([
            'nombre' => $request['nombre'],
            'apellido' => $request['apellido'],
            'ci' => $request['ci'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'genero' => $request['genero'],
            'fecha_nac' => $request['fecha_nac'],
            'telefono' => $request['telefono'],
            'estado' => true,
            'id_rol' => $request['id_rol']
        ]);
        $user->save();

        $procurador = Procurador::create([
            'id_usuario' => $user->id,
            'id_abogado' => $request->id_abogado,
        ]);
        $procurador->save();
         
        return redirect()->route('usuario.index');
    }
}
