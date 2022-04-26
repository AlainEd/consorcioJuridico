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

                <h1 class="font-bold m-5 text-center">
                    Procesos en general
                </h1>

                <div class="grid grid-cols-6 mb-10">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div>
                    <a href="" class="px-4 py-1 text-sm text-white bg-green-700 rounded-full">Crear Nuevo Proceso</a>
                    </div>
                </div>

                <div class="flex justify-center mx-auto">
                    <div class="flex flex-col">
                        <div class="w-full">
                            <div class="border-b border-gray-200 shadow">
                                <table class="divide-y divide-gray-300">
                                    <thead class="bg-black">
                                        <tr class="">
                                            <th class="px-6 py-2 text-lg text-white">
                                                N°
                                            </th>
                                            <th class="px-6 py-2 text-lg text-white">
                                                ID
                                            </th>
                                            <th class="px-6 py-2 text-lg text-white">
                                                Nombre
                                            </th>
                                            <th class="px-6 py-2 text-lg text-white">
                                                Estado
                                            </th>
                                            <th class="px-6 py-2 text-lg text-white">
                                                Acciones
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-300">
                                        @foreach ($procesos as $proceso)
                                        <tr class="whitespace-nowrap hover:bg-gray-200">
                                            <td class="px-6 py-4 text-lg text-gray-500">
                                                {{ ++$i }}
                                            </td>
                                            <td class="px-6 py-4 text-lg text-gray-500">
                                                {{ $proceso->id }}
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-lg text-gray-900">
                                                    {{ $proceso->nombre }}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-lg text-gray-500">{{ $proceso->estado }}</div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <a href="{{ route('procesos.show', $proceso) }}" class="px-4 py-1 text-sm text-white bg-blue-700 rounded-full">Ver</a>
                                                <a href="{{ route('procesos.edit', $proceso) }}" class="px-4 py-1 text-sm text-white bg-green-700 rounded-full">Editar</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</x-app-layout>