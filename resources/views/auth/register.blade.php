<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="nombre" value="{{ __('Nombre') }}" />
                <x-jet-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre')" required autofocus autocomplete="nombre" />
            </div>

            <div class="mt-4">
                <x-jet-label for="apellido" value="{{ __('Apellido') }}" />
                <x-jet-input id="apellido" class="block mt-1 w-full" type="text" name="apellido" :value="old('apellido')" required autofocus autocomplete="apellido" />
            </div>

            <div class="mt-4">
                <x-jet-label for="ci" value="{{ __('Cedula de Identidad')}}"/>
                <x-jet-input id="ci" class="block mt-1 w-full" type="number" name="ci" :value="old('ci')" required autofocus autocomplete="ci" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="genero" value="{{ __('Género')}}" />
                <div class="container flex flex-row mt-2">
                    <div class="form-check form-check-inline px-4">
                        <input class="form-check-input" id="hombre" type="radio" name="genero" value="M">
                        <label for="hombre">Hombre</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" id="mujer" type="radio" name="genero" value="F">
                        <label for="mujer">Mujer</label>
                    </div>
                </div> 
            </div>

            <div class="mt-4">
                <x-jet-label for="fecha_nac" value="{{ __('Fecha de Nacimiento')}}"/>
                <x-jet-input id="fecha_nac" class="block mt-1 w-full" type="date" name="fecha_nac" :value="old('fecha_nac')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="telefono" value="{{ __('Teléfono')}}"/>
                <x-jet-input id="telefono" class="block mt-1 w-full" type="number" name="telefono" :value="old('telefono')" required autofocus autocomplete="telefono" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Ya está registrado?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
