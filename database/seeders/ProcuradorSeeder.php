<?php

namespace Database\Seeders;

use App\Models\Procurador;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProcuradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $procurador = Procurador::create([
            'id_usuario' => 6,
            'id_abogado' => 1,
        ]);
        $procurador->save();

        $procurador = Procurador::create([
            'id_usuario' => 7,
            'id_abogado' => 2,
        ]);
        $procurador->save();

        $procurador = Procurador::create([
            'id_usuario' => 8,
            'id_abogado' => 3,
        ]);
        $procurador->save();
    }
}
