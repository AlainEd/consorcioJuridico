<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;

    protected $table = 'expediente';
    protected $fillable = [
        'id_proceso',
        'imagen',
        'titulo',
        'descripcion',
    ];
}