<?php

namespace Database\Seeders;

use App\Models\Juzgado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JuzgadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $juzgado = Juzgado::create([
            'nombre' => 'Juzgado #1',
            'direccion' => 'Palacio de Justicia - Piso 4 - Juzgado 23',
        ]);
        $juzgado->save();
    }
}
