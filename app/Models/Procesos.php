<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procesos extends Model
{
    use HasFactory;

    protected $table = 'proceso';
    protected $fillable = [
        'nombre',
        'area',
        'estado',
        'fecha',
        'hora',
        'fecha_cierre',
        'id_abogado',
        'id_juez',
        'id_cliente',
        'id_juzgado',
        'nombre_demandante',
        'ci_demandante',
        'nombre_demandado',
        'ci_demandado',
        'determinacion',
    ];
}
