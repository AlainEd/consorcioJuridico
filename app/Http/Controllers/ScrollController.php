<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ScrollController extends Controller
{
    public function buscador(Request $request){
        $nombres = User::where("id", 'like', $request->texto."%")->take(10)->get();
        return view("nombres.paginas",compact("nombres"));        
    }
}
