<?php

namespace App\Http\Controllers;

use App\Models\Juez;
use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index() {
        $usuariosJuez = User::join('juez', 'juez.id_usuario', 'users.id')
        ->select('users.id', 'users.nombre', 'users.apellido', 'users.email', 'users.ci', 'users.created_at', 'users.id_rol');

        $usuariosAbogados = User::join('abogado', 'abogado.id_usuario', 'users.id')
        //->union($usuariosJuez)
        ->select('users.id', 'users.nombre', 'users.apellido', 'users.email', 'users.ci', 'users.created_at', 'users.id_rol');

        $usuariosProcuradores = User::join('procurador', 'procurador.id_usuario', 'users.id')
        //->union($usuariosAbogados)
        ->select('users.id', 'users.nombre', 'users.apellido', 'users.email', 'users.ci', 'users.created_at', 'users.id_rol');

        $usuarios = User::join('cliente', 'cliente.id_usuario', 'users.id')
        ->union($usuariosJuez)->union($usuariosAbogados)->union($usuariosProcuradores)
        ->select('users.id', 'users.nombre', 'users.apellido', 'users.email', 'users.ci', 'users.created_at', 'users.id_rol')
        ->get();

        return view('users.index', compact('usuarios'))->with('i');
     }
}
