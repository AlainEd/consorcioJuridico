<?php

namespace Database\Seeders;

use App\Models\Procesos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProcesoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $proceso = Procesos::create([
            'nombre' => 'Robo de pertenencias',
            'area' => 'Robo',
            'estado' => 'Pendiente',
            'fecha' => null,
            'hora' => null,
            'fecha_cierre' => null,
            'id_abogado' => 1,
            'id_juez' => null,
            'id_cliente' => 1,
            'id_juzgado' => null,
            'nombre_demandante' => 'Milena Barrios',
            'ci_demandante' => '8265743',
            'nombre_demandado' => 'demando 1',
            'ci_demandado' => '12345678',
            'determincion' => null,
        ]);
        $proceso->save();

        $proceso = Procesos::create([
            'nombre' => 'Custodia de los hijos',
            'area' => 'Asistencia familiar',
            'estado' => 'En Proceso',
            'fecha' => '2022-04-26',
            'hora' => '16:30',
            'fecha_cierre' => null,
            'id_abogado' => 1,
            'id_juez' => 1,
            'id_cliente' => 1,
            'id_juzgado' => 1,
            'nombre_demandante' => 'Milena Barrios',
            'ci_demandante' => '8265743',
            'nombre_demandado' => 'demando 1',
            'ci_demandado' => '12345678',
            'determincion' => null,
        ]);
        $proceso->save();
    }
}
