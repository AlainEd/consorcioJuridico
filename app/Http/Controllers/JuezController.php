<?php

namespace App\Http\Controllers;

use App\Models\Abogado;
use App\Models\Admin;
use App\Models\Cliente;
use App\Models\Juez;
use App\Models\Procurador;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class JuezController extends Controller
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

        $juez = Juez::create([
            'id_usuario' => $user->id,
        ]);
        $juez->save();
         
        return view('users.index');
    }
}
