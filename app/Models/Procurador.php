<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procurador extends Model
{
    use HasFactory;

    protected $table = 'procurador';
    protected $fillable = [
        'id_usuario',
        'id_abogado'
    ];
}
