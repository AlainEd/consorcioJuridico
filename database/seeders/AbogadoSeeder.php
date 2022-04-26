<?php

namespace Database\Seeders;

use App\Models\Abogado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AbogadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $abogado = Abogado::create([
            'id_usuario' => 3,
        ]);
        $abogado->save();

        $abogado = Abogado::create([
            'id_usuario' => 4,
        ]);
        $abogado->save();

        $abogado = Abogado::create([
            'id_usuario' => 5,
        ]);
        $abogado->save();
    }
}
