<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol = new Rol();
        $rol->nombre = 'Admin';
        $rol->descripcion = 'Administrador General';
        $rol->save();

        $rol = new Rol();
        $rol->nombre = 'Juez';
        $rol->descripcion = 'Maxima autoridad';
        $rol->save();

        $rol = new Rol();
        $rol->nombre = 'Abogado';
        $rol->descripcion = 'Autoridad';
        $rol->save();

        $rol = new Rol();
        $rol->nombre = 'Procurador';
        $rol->descripcion = 'Ayudante de Abogado';
        $rol->save();

        $rol = new Rol();
        $rol->nombre = 'Cliente';
        $rol->descripcion = 'Persona natural';
        $rol->save();
    }
}
