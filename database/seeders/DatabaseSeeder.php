<?php

namespace Database\Seeders;

use App\Models\Abogado;
use App\Models\Admin;
use App\Models\Rol;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(RolSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(JuzgadoSeeder::class);
        $this->call(JuezSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(AbogadoSeeder::class);
        $this->call(ProcuradorSeeder::class);
        $this->call(ClienteSeeder::class);
        $this->call(ProcesoSeeder::class);
    }
}
