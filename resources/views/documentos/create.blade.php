@section('title', 'Documentos Digitales')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Documentos Digitales
        </h2>
    </x-slot>
    <form action="{{ route('documento.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Card de los documentos digitales -->
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                    <div class="py-16 white">
                        <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
                            <h2 class="mb-12 text-center text-2xl text-gray-900 font-bold md:text-4xl">Documentos
                                Digitales del Proceso #
                                {{ $proceso->id }}</h2>
                            <input type="hidden" name="id_proceso" value="{{ $proceso->id }}">

                            <div class="grid gap-8 md:grid-rows-2 lg:grid-cols-4">

                                <div
                                    class="p-6 border border-gray-50 rounded-xl bg-gray-50 sm:space-x-8 sm:p-8 col-span-3">
                                    <div class="grid grid-cols-2">
                                        <div>
                                            <h3 class="mb-5 text-2xl text-gray-900 font-bold md:text-4xl">Subir imagenes
                                            </h3>
                                            <input class="mb-5" type="file" name="img" accept="image/*">
                                            <h6 class="text-sm font-semibold leading-none" for="titulo">Titulo *</h6>
                                            <x-jet-input class="block mt-1 w-full mb-5" id="titulo" type="text" name="titulo" :value="old('titulo')" require autofocus autocomplete="titulo"/>
                                            <h6 class="text-sm font-semibold leading-none" for="descripcion">Descripcion</h6>
                                            <x-jet-input class="block mt-1 w-full" id="descripcion" type="text" name="descripcion" :value="old('descripcion')" require autofocus autocomplete="descripcion"/>
                                            <div class="flex justify-center">
                                                <x-jet-button class="m-10 bg-blue-700 text-white">
                                                    {{ __('Guardar') }}
                                                </x-jet-button>
                                            </div>
                                            <div>
                                                <span>
                                                    {{ __('Las imgenes no deben pesar mas de 2mb') }}
                                                </span>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="image-wrapper">
                                                <img src="https://image.freepik.com/vector-gratis/documentos-papel-hoja-dibujos-animados_18591-44528.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div></div>
                                @foreach ($expedientes as $expediente)
                                    <div class="p-6 border border-gray-50 rounded-xl bg-gray-50 sm:space-x-8 sm:p-8 transition-all">
                                        <div class="space-y-4 mt-4 text-center sm:mt-0 sm:text-left">
                                                <img src="{{ $expediente->imagen }}" alt="">
                                                <h3>{{ $expediente->titulo }}</h3>
                                                <span>{{ $expediente->descripcion }}</span>
                                        </div>
                                    </div>
                                @endforeach
                                @for ($i = count($expedientes); $i < 8; $i++)
                                    <div class="p-6 border border-gray-100 rounded-xl bg-gray-50 sm:space-x-8 sm:p-8">
                                        <div class="space-y-4 mt-4 text-center sm:mt-0 sm:text-left">
                                            <div id="empty-cover-art"
                                                class="rounded sm:w-full md:w-48 md:h-48 py-16 text-center opacity-50 md:border-solid md:border-2 md:border-gray-400">
                                                <svg class="mx-auto feather feather-image"
                                                    xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round">
                                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                                    <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                                    <polyline points="21 15 16 10 5 21"></polyline>
                                                </svg>
                                                <div class="py-4">
                                                    Añadir Nuevos Documentos
                                                </div>
                                            </div>

                                        </div>
                                    </div>  
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-app-layout>

@section('style')
    <style>
        .image-wrapper {
            position: relative;
            padding-bottom: 56.25%;
        }

        .image-wrapper img {
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }

    </style>
@endsection
