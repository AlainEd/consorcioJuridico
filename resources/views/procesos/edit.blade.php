@section('title', 'Procesos')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Procesos
        </h2>
    </x-slot>
    <form action="{{ route('procesos.update', $proceso) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                    <div class="py-16 white">
                        <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
                            <h2 class="mb-12 text-center text-2xl text-gray-900 font-bold md:text-4xl">Proceso #
                                {{ $proceso->id }}</h2>
                            <input type="hidden" name="id" value="{{ $proceso->id }}">
                            <div class="grid gap-8 md:grid-rows-2 lg:grid-cols-2">
                                <div class="row-span-2 p-6 border border-gray-100 rounded-xl bg-gray-50 sm:p-8">
                                    <h3 class="mb-12 text-2xl text-gray-900 font-bold md:text-4xl">Información del
                                        Proceso</h3>
                                    <div>
                                        <h6 class="text-sm font-semibold leading-none">Nombre del Proceso</h6>
                                        @if (Auth::user()->id_rol == 2)
                                            <span
                                                class="text-lg text-gray-500 hover:text-black">{{ $proceso->nombre }}</span>
                                        @else
                                            <x-jet-input class="block mt-1 w-full" id="nombre_proceso" type="text"
                                                name="nombre_proceso" value="{{ $proceso->nombre }}" require autofocus
                                                autocomplete="nombre_proceso" />
                                        @endif
                                        <h6 class="text-sm mt-5 font-semibold leading-none">Área</h6>
                                        @if (Auth::user()->id_rol == 2)
                                            <span
                                                class="text-lg text-gray-500 hover:text-black">{{ $proceso->area }}</span>
                                        @else
                                            <x-jet-input class="block mt-1 w-full" id="area" type="text" name="area"
                                                value="{{ $proceso->area }}" require autofocus autocomplete="area" />
                                        @endif
                                        <h6 class="text-sm mt-5 font-semibold leading-none">Estado</h6>
                                        <span
                                            class="text-lg text-gray-500 hover:text-black">{{ $proceso->estado }}</span>
                                        <h6 class="text-sm mt-5 font-semibold leading-none">Fecha</h6>
                                        <span class="text-lg text-gray-500 hover:text-black">
                                            @if (Auth::user()->id_rol == 2)
                                                <x-jet-input class="block mt-1 w-full" id="fecha" type="date"
                                                    name="fecha" :value="old('fecha')" require autofocus
                                                    autocomplete="fecha" />
                                            @else
                                                @if ($proceso->fecha != null)
                                                    {{ $proceso->fecha }}
                                                @else
                                                    {{ __('No establecido') }}
                                                @endif
                                            @endif
                                        </span>
                                        <h6 class="text-sm mt-5 font-semibold leading-none">Hora</h6>
                                        <span class="text-lg text-gray-500 hover:text-black">
                                            @if (Auth::user()->id_rol == 2)
                                                <x-jet-input class="block mt-1 w-full" id="hora" type="time" name="hora"
                                                    :value="old('hora')" require autofocus autocomplete="hora" />
                                            @else
                                                @if ($proceso->hora != null)
                                                    {{ $proceso->hora }}
                                                @else
                                                    {{ __('No establecido') }}
                                                @endif
                                            @endif

                                        </span>
                                        <div class="grid grid-cols-2">
                                            <div>
                                                <h6 class="text-sm mt-5 font-semibold leading-none">Abogado a Cargo</h6>
                                                <span
                                                    class="text-lg text-gray-500 hover:text-black">{{ $userAbogado->nombre . ' ' . $userAbogado->apellido }}</span>
                                            </div>
                                            <div>
                                                <h6 class="text-sm mt-5 font-semibold leading-none">Teléfono</h6>
                                                <span
                                                    class="text-lg text-gray-500 hover:text-black">{{ $userAbogado->telefono }}</span>
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

                                <div class="p-6 border border-gray-100 rounded-xl bg-gray-50 sm:space-x-8 sm:p-8">
                                    <div class="space-y-4 mt-4 text-center sm:mt-0 sm:text-left">
                                        <h3 class="mb-5 text-2xl text-gray-900 font-bold md:text-4xl">Datos del
                                            Demandante</h3>
                                        <div>
                                            <h6 class="text-sm font-semibold leading-none">Nombre</h6>
                                            @if (Auth::user()->id_rol == 2)
                                                <span
                                                    class="text-lg text-gray-500 hover:text-black">{{ $proceso->nombre_demandante }}</span>
                                            @else
                                                <x-jet-input class="block mt-1 w-full" id="nombre_demandante"
                                                    type="text" name="nombre_demandante"
                                                    value="{{ $proceso->nombre_demandante }}" require autofocus
                                                    autocomplete="nombre_demandante" />
                                            @endif
                                            <h6 class="text-sm mt-5 font-semibold leading-none">Cédula de Identidad</h6>
                                            @if (Auth::user()->id_rol == 2)
                                                <span
                                                    class="text-lg text-gray-500 hover:text-black">{{ $proceso->ci_demandante }}</span>
                                            @else
                                                <x-jet-input class="block mt-1 w-full" id="ci_demandante" type="number"
                                                    name="ci_demandante" value="{{ $proceso->ci_demandante }}"
                                                    require autofocus autocomplete="ci_demandante" />
                                            @endif
                                            <h6 class="text-sm mt-5 font-semibold leading-none">Teléfono</h6>
                                            @if (Auth::user()->id_rol == 2)
                                                <span
                                                    class="text-lg text-gray-500 hover:text-black">{{ $proceso->telefono_demandante }}</span>
                                            @else
                                                <span
                                                    class="text-lg text-gray-500 hover:text-black">{{ $proceso->telefono }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="p-6 border border-gray-100 rounded-xl bg-gray-50 sm:space-x-8 sm:p-8">
                                    <div class="space-y-4 mt-4 text-center sm:mt-0 sm:text-left">
                                        <h3 class="mb-5 text-2xl text-gray-900 font-bold md:text-4xl">Datos del
                                            Demandado</h3>
                                        <div>
                                            <h6 class="text-sm font-semibold leading-none">Nombre</h6>
                                            @if (Auth::user()->id_rol == 2)
                                                <span
                                                    class="text-lg text-gray-500 hover:text-black">{{ $proceso->nombre_demandado }}</span>
                                            @else
                                                <x-jet-input class="block mt-1 w-full" id="nombre_demandado" type="text"
                                                    name="nombre_demandado" value="{{ $proceso->nombre_demandado }}"
                                                    require autofocus autocomplete="nombre_demandado" />
                                            @endif
                                            <h6 class="text-sm mt-5 font-semibold leading-none">Cédula de Identidad</h6>
                                            @if (Auth::user()->id_rol == 2)
                                                <span
                                                    class="text-lg text-gray-500 hover:text-black">{{ $proceso->ci_demandado }}</span>
                                            @else
                                                <x-jet-input class="block mt-1 w-full" id="ci_demandado" type="number"
                                                    name="ci_demandado" value="{{ $proceso->ci_demandado }}" require
                                                    autofocus autocomplete="ci_demandado" />
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <x-jet-button class="mb-10 mr-10">
                            {{ __('Guardar') }}
                        </x-jet-button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card de los documentos digitales -->
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                    <div class="py-16 white">
                        <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
                            <h2 class="mb-12 text-center text-2xl text-gray-900 font-bold md:text-4xl">Documentos Digitales del Proceso #
                                {{ $proceso->id }}</h2>
                            <input type="hidden" name="id" value="{{ $proceso->id }}">
                            <div class="grid gap-8 md:grid-rows-2 lg:grid-cols-4">
                                
                                <div class="p-6 border border-gray-50 rounded-xl bg-gray-50 sm:space-x-8 sm:p-8 col-span-3">
                                    <div class="grid grid-cols-2">
                                        <div class="">
                                            <h3 class="mb-5 text-2xl text-gray-900 font-bold md:text-4xl">Subir imagenes</h3>
                                        </div>
                                        <div class="">
                                            <div class="image-wrapper">
                                                <img src="https://th.bing.com/th/id/OIP.lmpxMI1Ymuj-R9TH8j5zsQHaEK?pid=ImgDet&rs=1" alt="">
                                                <input type="file" name="img">
                                                <button>Subir imagen</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-6 border border-gray-50 rounded-xl bg-gray-50 sm:space-x-8 sm:p-8 transition-all col-start-1">
                                    <div class="space-y-4 mt-4 text-center sm:mt-0 sm:text-left">
                                        <h3 class="mb-5 text-2xl text-gray-900 font-bold md:text-4xl">Datos del
                                            Demandante</h3>
                                        

                                    </div>
                                </div>
                                <div class="p-6 border border-gray-100 rounded-xl bg-gray-50 sm:space-x-8 sm:p-8">
                                    <div class="space-y-4 mt-4 text-center sm:mt-0 sm:text-left">
                                        <h3 class="mb-5 text-2xl text-gray-900 font-bold md:text-4xl">Datos del
                                            Demandado</h3>
                                        

                                    </div>
                                </div>
                                <div class="p-6 border border-gray-100 rounded-xl bg-gray-50 sm:space-x-8 sm:p-8">
                                    <div class="space-y-4 mt-4 text-center sm:mt-0 sm:text-left">
                                        <h3 class="mb-5 text-2xl text-gray-900 font-bold md:text-4xl">Datos del
                                            Demandado</h3>
                                        
                                            
                                    </div>
                                </div>
                                <div class="p-6 border border-gray-100 rounded-xl bg-gray-50 sm:space-x-8 sm:p-8">
                                    <div class="space-y-4 mt-4 text-center sm:mt-0 sm:text-left">
                                        <h3 class="mb-5 text-2xl text-gray-900 font-bold md:text-4xl">Datos del
                                            Demandado</h3>
                                        
                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <x-jet-button class="mb-10 mr-10 transition hover:-translate-y-1 hover:scale-110 duration-300">
                            {{ __('Guardar') }}
                        </x-jet-button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-app-layout>

@section('style')
    <style>
        .image-wrapper{
            position: relative;
            padding-bottom: 56.25%;
        }

        .image-wrapper img{
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
    </style>
@endsection
