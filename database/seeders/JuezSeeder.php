<?php

namespace Database\Seeders;

use App\Models\Juez;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JuezSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $juez = Juez::create([
            'id_usuario' => 2,
            'id_juzgado' => 1,
        ]);
        $juez->save();
    }
}
