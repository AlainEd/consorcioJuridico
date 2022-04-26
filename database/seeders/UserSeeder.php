<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'email' => 'edson3103a@gmail.com',
            'password' => Hash::make('12345678'),
            'ci' => '8235987',
            'nombre' => 'Edson',
            'apellido' => 'Sacaca',
            'genero' => 'M',
            'fecha_nac' => '1999-03-31',
            'telefono' => '69172849',
            'estado' => true,
            'id_rol' => 1,
        ]);
        $user->save();

        //juez

        $user = User::create([
            'email' => 'hugoA@gmail.com',
            'password' => Hash::make('12345678'),
            'ci' => '7543535',
            'nombre' => 'Hugo',
            'apellido' => 'Arana',
            'genero' => 'F',
            'fecha_nac' => '1988-03-31',
            'telefono' => '74746353',
            'estado' => true,
            'id_rol' => 2,
        ]);
        $user->save();

        //abogados

        $user = User::create([
            'email' => 'mariaR@gmail.com',
            'password' => Hash::make('12345678'),
            'ci' => '8223255',
            'nombre' => 'Maria',
            'apellido' => 'Rodriguez',
            'genero' => 'F',
            'fecha_nac' => '1999-03-31',
            'telefono' => '68132321',
            'estado' => true,
            'id_rol' => 3,
        ]);
        $user->save();

        $user = User::create([
            'email' => 'pedroR@gmail.com',
            'password' => Hash::make('12345678'),
            'ci' => '8346436',
            'nombre' => 'Pedro',
            'apellido' => 'Rojas',
            'genero' => 'M',
            'fecha_nac' => '1999-03-31',
            'telefono' => '68436433',
            'estado' => true,
            'id_rol' => 3,
        ]);
        $user->save();

        $user = User::create([
            'email' => 'ernestoF@gmail.com',
            'password' => Hash::make('12345678'),
            'ci' => '8222352',
            'nombre' => 'Ernesto',
            'apellido' => 'Flores',
            'genero' => 'M',
            'fecha_nac' => '1999-03-31',
            'telefono' => '68437321',
            'estado' => true,
            'id_rol' => 3,
        ]);
        $user->save();

        //procuradores

        $user = User::create([
            'email' => 'omarD@gmail.com',
            'password' => Hash::make('12345678'),
            'ci' => '8778433',
            'nombre' => 'Omar',
            'apellido' => 'Diaz',
            'genero' => 'M',
            'fecha_nac' => '1999-03-31',
            'telefono' => '68363622',
            'estado' => true,
            'id_rol' => 4,
        ]);
        $user->save();

        $user = User::create([
            'email' => 'fernandaB@gmail.com',
            'password' => Hash::make('12345678'),
            'ci' => '8353633',
            'nombre' => 'Fernanda',
            'apellido' => 'Barrios',
            'genero' => 'F',
            'fecha_nac' => '1999-03-31',
            'telefono' => '68346333',
            'estado' => true,
            'id_rol' => 4,
        ]);
        $user->save();

        $user = User::create([
            'email' => 'juanG@gmail.com',
            'password' => Hash::make('12345678'),
            'ci' => '8324562',
            'nombre' => 'Juan',
            'apellido' => 'Garcia',
            'genero' => 'M',
            'fecha_nac' => '1999-03-31',
            'telefono' => '72522242',
            'estado' => true,
            'id_rol' => 4,
        ]);
        $user->save();

        //clientes

        $user = User::create([
            'email' => 'milenaB@gmail.com',
            'password' => Hash::make('12345678'),
            'ci' => '8265743',
            'nombre' => 'Milena',
            'apellido' => 'Barrios',
            'genero' => 'F',
            'fecha_nac' => '1999-03-31',
            'telefono' => '6825363',
            'estado' => true,
            'id_rol' => 5,
        ]);
        $user->save();

        $user = User::create([
            'email' => 'rocioT@gmail.com',
            'password' => Hash::make('12345678'),
            'ci' => '8252522',
            'nombre' => 'Rocio',
            'apellido' => 'Torres',
            'genero' => 'F',
            'fecha_nac' => '1999-03-31',
            'telefono' => '63636343',
            'estado' => true,
            'id_rol' => 5,
        ]);
        $user->save();

        $user = User::create([
            'email' => 'jairoM@gmail.com',
            'password' => Hash::make('12345678'),
            'ci' => '8252623',
            'nombre' => 'Jairo',
            'apellido' => 'Menacho',
            'genero' => 'M',
            'fecha_nac' => '1999-03-31',
            'telefono' => '78543362',
            'estado' => true,
            'id_rol' => 5,
        ]);
        $user->save();
    }
}
