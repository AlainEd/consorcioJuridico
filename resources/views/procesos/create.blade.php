@section('title', 'Procesos')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Procesos
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">


                <form action="{{ route('procesos.store') }}" method="POST">
                    @csrf
                    <div class="py-16 white">
                        <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
                            <h2 class="mb-12 text-center text-2xl text-gray-900 font-bold md:text-4xl">Creacion de un nuevo proceso</h2>
                            <div class="grid gap-8 md:grid-rows-2 lg:grid-cols-2">
                                <div class="row-span-2 p-6 border border-black rounded-xl bg-gray-200 sm:p-8">
                                    <h3 class="mb-12 text-2xl text-gray-900 font-bold md:text-4xl">Información del Proceso</h3>
                                    <div>
                                        <h6 class="text-sm font-semibold leading-none" for="nombre_proceso">Nombre del Proceso *</h6>
                                        <x-jet-input class="block mt-1 w-full" id="nombre_proceso" type="text" name="nombre_proceso" :value="old('nombre_proceso')" require autofocus autocomplete="nombre_proceso"/>
                                        <h6 class="text-sm mt-5 font-semibold leading-none">Área</h6>
                                        <x-jet-input class="block mt-1 w-full" id="area" type="text" name="area" :value="old('area')" require autofocus autocomplete="area"/>

                                    </div>
                                </div>

                                <div class="p-6 border border-gray-100 rounded-xl bg-gray-50 sm:space-x-8 sm:p-8">
                                    <div class="space-y-4 mt-4 text-center sm:mt-0 sm:text-left">
                                        <h3 class="mb-5 text-2xl text-gray-900 font-bold md:text-4xl">Datos del demandante</h3>
                                        <div>
                                            <h6 class="text-sm font-semibold leading-none" for="nombre_demandante">Nombre</h6>
                                            <x-jet-input class="block mt-1 w-full" id="nombre_demandante" type="text" name="nombre_demandante" :value="old('nombre_demandante')" require autofocus autocomplete="nombre_demandante"/>
                                            <h6 class="text-sm mt-5 font-semibold leading-none" for="ci">Cédula de Identidad</h6>
                                            <x-jet-input class="block mt-1 w-full" id="ci_demandante" type="number" name="ci_demandante" :value="old('ci_demandante')" require autofocus autocomplete="ci_demandante"/>
                                            <h6 class="text-sm mt-5 font-semibold leading-none" for="telefono">Teléfono</h6>
                                            <x-jet-input class="block mt-1 w-full" id="telefono" type="number" name="telefono" :value="old('telefono')" require autofocus autocomplete="telefono"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-6 border border-gray-100 rounded-xl bg-gray-50 sm:space-x-8 sm:p-8">
                                    <div class="space-y-4 mt-4 text-center sm:mt-0 sm:text-left">
                                        <h3 class="mb-5 text-2xl text-gray-900 font-bold md:text-4xl">Datos del demandado</h3>
                                        <div>
                                            <h6 class="text-sm font-semibold leading-none" for="nombre_demandado">Nombre</h6>
                                            <x-jet-input class="block mt-1 w-full" id="nombre_demandado" type="text" name="nombre_demandado" :value="old('nombre_demandado')" require autofocus autocomplete="nombre_demandado"/>
                                            <h6 class="text-sm mt-5 font-semibold leading-none" for="ci">Cédula de Identidad</h6>
                                            <x-jet-input class="block mt-1 w-full" id="ci_demandado" type="number" name="ci_demandado" :value="old('ci_demandado')" require autofocus autocomplete="ci_demandado"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <x-jet-button class="mb-10 mr-10">
                            {{ __('Registrar') }}
                        </x-jet-button>
                    </div>
                    
                </form>
            </div>
        </div>
</x-app-layout>