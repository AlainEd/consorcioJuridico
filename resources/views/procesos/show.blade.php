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



                <div class="py-16 white">
                    <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
                        <h2 class="mb-12 text-center text-2xl text-gray-900 font-bold md:text-4xl">Proceso # {{ $proceso->id }}</h2>
                        <div class="grid gap-8 md:grid-rows-2 lg:grid-cols-2">
                            <div class="row-span-2 p-6 border border-gray-100 rounded-xl bg-gray-50 sm:p-8">
                                <h3 class="mb-12 text-2xl text-gray-900 font-bold md:text-4xl">Información del Proceso</h3>
                                <div>
                                    <h6 class="text-sm font-semibold leading-none">Nombre del Proceso</h6>
                                    <span class="text-lg text-gray-500 hover:text-black">{{ $proceso->nombre }}</span>
                                    <h6 class="text-sm mt-5 font-semibold leading-none">Área</h6>
                                    <span class="text-lg text-gray-500 hover:text-black">{{ $proceso->area }}</span>
                                    <h6 class="text-sm mt-5 font-semibold leading-none">Estado</h6>
                                    <span class="text-lg text-gray-500 hover:text-black">{{ $proceso->estado }}</span>
                                    <h6 class="text-sm mt-5 font-semibold leading-none">Fecha</h6>
                                    <span class="text-lg text-gray-500 hover:text-black">
                                        @if ($proceso->fecha != null)
                                        {{ $proceso->fecha }}
                                        @else
                                        {{ __('No establecido') }}
                                        @endif
                                    </span>
                                    <h6 class="text-sm mt-5 font-semibold leading-none">Hora</h6>
                                    <span class="text-lg text-gray-500 hover:text-black">
                                        @if ($proceso->hora != null)
                                        {{ $proceso->hora }}
                                        @else
                                        {{ __('No establecido') }}
                                        @endif
                                    </span>
                                    <div class="grid grid-cols-2">
                                        <div>
                                            <h6 class="text-sm mt-5 font-semibold leading-none">Abogado a Cargo</h6>
                                            <span class="text-lg text-gray-500 hover:text-black">{{ $userAbogado->nombre .' '. $userAbogado->apellido }}</span>
                                        </div>
                                        <div>
                                            <h6 class="text-sm mt-5 font-semibold leading-none">Teléfono</h6>
                                            <span class="text-lg text-gray-500 hover:text-black">{{ $userAbogado->telefono }}</span>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-2">
                                        <div>
                                            <h6 class="text-sm mt-5 font-semibold leading-none">Juzgado</h6>
                                            <span class="text-lg text-gray-500 hover:text-black">
                                                @if ($proceso->id_juzgado != null)
                                                {{ $juzgado->nombre }}
                                                @else
                                                {{ __('Por definir') }}
                                                @endif
                                            </span>
                                        </div>
                                        <div>
                                            <h6 class="text-sm mt-5 font-semibold leading-none">Dirección</h6>
                                            <span class="text-lg text-gray-500 hover:text-black">
                                                @if ($proceso->id_juzgado != null)
                                                {{ $juzgado->direccion }}
                                                @else
                                                {{ __('Por definir') }}
                                                @endif
                                            </span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="p-6 border border-gray-100 rounded-xl bg-gray-50 sm:flex sm:space-x-8 sm:p-8">
                                <div class="space-y-4 mt-4 text-center sm:mt-0 sm:text-left">
                                    <h3 class="mb-5 text-2xl text-gray-900 font-bold md:text-4xl">Datos del demandante</h3>
                                    <div>
                                        <h6 class="text-sm font-semibold leading-none">Nombre</h6>
                                        <span class="text-lg text-gray-500 hover:text-black">{{ $userCliente->nombre .' '. $userCliente->apellido }}</span>
                                        <h6 class="text-sm mt-5 font-semibold leading-none">Cédula de Identidad</h6>
                                        <span class="text-lg text-gray-500 hover:text-black">{{ $userCliente->ci }}</span>
                                        <h6 class="text-sm mt-5 font-semibold leading-none">Teléfono</h6>
                                        <span class="text-lg text-gray-500 hover:text-black">{{ $userCliente->telefono }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6 border border-gray-100 rounded-xl bg-gray-50 sm:flex sm:space-x-8 sm:p-8">
                                <div class="space-y-4 mt-4 text-center sm:mt-0 sm:text-left">
                                    <h3 class="mb-5 text-2xl text-gray-900 font-bold md:text-4xl">Datos del demandante</h3>
                                    <div>
                                        <h6 class="text-sm font-semibold leading-none">Nombre</h6>
                                        <span class="text-lg text-gray-500 hover:text-black">{{ $proceso->nombre_demandado }}</span>
                                        <h6 class="text-sm mt-5 font-semibold leading-none">Cédula de Identidad</h6>
                                        <span class="text-lg text-gray-500 hover:text-black">{{ $proceso->ci_demandado }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>