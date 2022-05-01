@section('title', 'Documentos Digitales')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Documentos Digitales
        </h2>
    </x-slot>
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
                            @if (count($expedientes) > 0)
                                <div class="grid gap-8 md:grid-rows-2 lg:grid-cols-2">
                                    @foreach ($expedientes as $expediente)   
                                        <div class="row-span-2 p-6 border border-gray-100 rounded-xl bg-gray-50 sm:p-8">
                                            <div class="space-y-4 mt-4 text-center sm:mt-0 sm:text-left">
                                                <img src="{{ $expediente->imagen }}" alt="imagen-expediente">
                                                <h3>{{ $expediente->titulo }}</h3>
                                                <span>{{ $expediente->descripcion }}</span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-10" role="alert">
                                    <strong class="font-bold">Expediente Vacio!</strong>
                                    <span class="block sm:inline">Ingrese <a class="text-blue-900" href="{{ route('createDocumento', $proceso) }}">aqui</a> sus documentos digitales para este proceso.</span>
                                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3"></span>
                                </div>
                                <div class="grid gap-8 md:grid-rows-1 lg:grid-cols-2">
                                    <div class="row-span-2 p-6 border border-gray-100 rounded-xl bg-gray-50 sm:p-8">
                                        <div id="empty-cover-art" class="rounded sm:w-full md:w-48 md:h-48 py-16 text-center opacity-50 md:border-solid md:border-2 md:border-gray-400">
                                            <svg class="mx-auto feather feather-image" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                              <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                              <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                              <polyline points="21 15 16 10 5 21"></polyline>
                                            </svg>
                                            <div class="py-4">
                                                Agrega nuevos documentos
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-span-2 p-6 border border-gray-100 rounded-xl bg-gray-50 sm:p-8">
                                        <div id="empty-cover-art" class="rounded sm:w-full md:w-48 md:h-48 py-16 text-center opacity-50 md:border-solid md:border-2 md:border-gray-400">
                                            <svg class="mx-auto feather feather-image" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                              <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                              <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                              <polyline points="21 15 16 10 5 21"></polyline>
                                            </svg>
                                            <div class="py-4">
                                              Agrega nuevos documentos
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            @endif
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
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