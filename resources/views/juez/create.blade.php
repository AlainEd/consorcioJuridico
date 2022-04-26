<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Crear Cuenta para Juez
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container mx-auto">
                    <h1 class="text-center m-10">Información Personal</h1>
                    <form method="POST" action="{{ route('registrarAbogado') }}">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
                            <div class="container ml-10 m-5 grid grid-cols-4 gap-4">
                                <div class="col-span-2">
                                    <x-jet-label for="nombre" value="{{ __('Nombre') }}" />
                                    <x-jet-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre')" required autofocus autocomplete="nombre" />
                                </div>

                                <div class="col-span-2">
                                    <x-jet-label for="apellido" value="{{ __('Apellido') }}" />
                                    <x-jet-input id="apellido" class="block mt-1 w-full" type="text" name="apellido" :value="old('apellido')" required autofocus autocomplete="apellido" />
                                </div>
                                
                                <div class="col-span-4">
                                    <x-jet-label for="email" value="{{ __('Email') }}" />
                                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                                </div>

                                <div class="col-span-2">
                                    <x-jet-label for="ci" value="{{ __('Cedula de Identidad')}}"/>
                                    <x-jet-input id="ci" class="block mt-1 w-full" type="number" name="ci" :value="old('ci')" required autofocus autocomplete="ci" />
                                </div>
                                
                                <div class="col-span-2">
                                    <x-jet-label for="fecha_nac" value="{{ __('Fecha de Nacimiento')}}"/>
                                    <x-jet-input id="fecha_nac" class="block mt-1 w-full" type="date" name="fecha_nac" :value="old('fecha_nac')" required />
                                </div>

                                <div class="col-span-2">
                                    <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                                </div>

                                <div class="col-span-2">
                                    <x-jet-label for="password_confirmation" value="{{ __('Confirmar Contraseña') }}" />
                                    <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                                </div>

                                <div class="col-span-4">
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

                                <div class="col-span-2">
                                    <x-jet-label for="telefono" value="{{ __('Teléfono')}}"/>
                                    <x-jet-input id="telefono" class="block mt-1 w-full" type="number" name="telefono" :value="old('telefono')" required autofocus autocomplete="telefono" />
                                </div>

                                <input type="hidden" value="2" name="id_rol">

                                <div class="flex items-center justify-end mt-4">
                                    <button type="submit">
                                        {{ __('Registrar') }}
                                    </button>
                                </div>
                            </div>
                            
                            <div class="grid grid-row-4 grid-flow-col ml-10">
                                <div></div>   
                                <div class="rounded-full border-round">
                                    <img src="https://th.bing.com/th/id/OIP.Uri74sJ2xOtVBOOpLU1CXwHaHa?pid=ImgDet&rs=1" alt="" width="300" height="300">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>