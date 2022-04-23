<?php

namespace App\Http\Controllers;

use App\Models\Abogado;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AbogadoController extends Controller
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

        $abogado = Abogado::create([
            'id_usuario' => $user->id,
        ]);
        $abogado->save();
         
        return view('users.index')->with('success', 'Abogado creado correctamente');
    }
}
