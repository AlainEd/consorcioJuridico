<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abogado extends Model
{
    use HasFactory;

    protected $table = 'abogado';
    protected $fillable = [
        'id_usuario',
    ];
}