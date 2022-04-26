<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cliente = Cliente::create([
            'id_usuario' => 9,
        ]);
        $cliente->save();

        $cliente = Cliente::create([
            'id_usuario' => 10,
        ]);
        $cliente->save();

        $cliente = Cliente::create([
            'id_usuario' => 11,
        ]);
        $cliente->save();
    }
}
