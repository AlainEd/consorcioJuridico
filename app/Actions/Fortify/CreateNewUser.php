<?php

namespace App\Actions\Fortify;

use App\Models\Abogado;
use App\Models\Admin;
use App\Models\Cliente;
use App\Models\Juez;
use App\Models\Procurador;
use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'nombre' => ['required', 'string', 'max:50'],
            'apellido' => ['required', 'string', 'max:50'],
            'ci' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            //'genero' => ['enum'],
            'fecha_nac' => ['required'],
            'telefono' => ['required']
            //'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();


        return DB::transaction(function () use ($input) {
            $user = User::create([
                'nombre' => $input['nombre'],
                'apellido' => $input['apellido'],
                'ci' => $input['ci'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
                'genero' => $input['genero'],
                'fecha_nac' => $input['fecha_nac'],
                'telefono' => $input['telefono'],
                'estado' => true,
                'id_rol' => $input['id_rol']
            ]);
            $user->save();

            $cliente = Cliente::create([
                'id_usuario' => $user->id,
            ]);
            $cliente->save();

            return $user;
        });
    }

}
