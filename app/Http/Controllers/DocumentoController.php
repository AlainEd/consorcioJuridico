<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDocumento;
use App\Models\Documento;
use App\Models\Procesos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DocumentoController extends Controller
{
    public function nuevo($proceso) {
        $proceso = Procesos::findOrFail($proceso);
        $expedientes = DB::table('expediente')->where('expediente.id_proceso', '=', $proceso->id)->get();
        return view('documentos.create', compact('proceso', 'expedientes'));
    }

    public function store(Request $request) {
        $request->validate([
            'img' => 'required|image|max:2048',
        ]);

        $img = $request->file('img')->store('public');
        $url = Storage::url($img);

        Documento::create([
            'id_proceso' => $request->id_proceso,
            'imagen' => $url,
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
        ]);

        return redirect()->route('procesos.show', $request->id_proceso);
    }

    public function mostrar($proceso) {
        $proceso = Procesos::findOrFail($proceso);
        $expedientes = DB::table('expediente')->where('expediente.id_proceso', '=', $proceso->id)->get();
        return view('documentos.show', compact('expedientes', 'proceso'));
    }
}
