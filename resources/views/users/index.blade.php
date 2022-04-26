@section('title', 'Usuarios')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Usuarios
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="text-center m-5">
                    <h1 class="font-bold">Usuarios</h1>
                </div>

                <div class="grid grid-cols-4 m-10">
                    <div>Buscador</div>
                    <div></div>
                    <div></div>
                    <div>
                        <a href="{{ route('createUser') }}">Crear Usuario</a>
                    </div>
                </div>
                    
                <div class="flex justify-center mx-auto">
                    <div class="flex flex-col">
                        <div class="w-full">
                            <div class="border-b border-gray-200 shadow">
                                <table class="divide-y divide-gray-300">
                                    <thead class="bg-gray-400">
                                        <tr class="">
                                            <th class="px-6 py-2 text-xs text-gray-500">
                                                N°
                                            </th>
                                            <th class="px-6 py-2 text-xs text-gray-500">
                                                Nombre
                                            </th>
                                            <th class="px-6 py-2 text-xs text-gray-500">
                                                Email
                                            </th>
                                            <th class="px-6 py-2 text-xs text-gray-500">
                                                CI
                                            </th>
                                            <th class="px-6 py-2 text-xs text-gray-500">
                                                Rol
                                            </th>
                                            <th class="px-6 py-2 text-xs text-gray-500">
                                                Estado
                                            </th>
                                            <th class="px-6 py-2 text-xs text-gray-500">
                                                Activar/Desactivar
                                            </th>
                                            <th class="px-6 py-2 text-xs text-gray-500">
                                                Ver
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-300">
                                        @foreach ($usuarios as $usuario)
                                            <tr class="whitespace-nowrap hover:bg-slate-500">
                                                <td class="px-6 py-4 text-sm text-gray-500">
                                                    {{ ++$i }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    <div class="text-sm text-gray-900">
                                                        {{ $usuario->nombre . $usuario->apellido }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <div class="text-sm text-gray-500">{{ $usuario->email }}</div>
                                                </td>
                                                <td class="px-6 py-4 text-sm text-gray-500">
                                                    {{ $usuario->ci }}
                                                </td>
                                                <td class="px-6 py-4 text-sm text-gray-500">
                                                    @switch($usuario->id_rol)
                                                        @case('1')
                                                            Administrador
                                                            @break
                                                        @case('2')
                                                            Juez
                                                        @break
                                                        @case('3')
                                                            Abogado
                                                            @break
                                                        @case('4')
                                                            Procurador
                                                            @break
                                                        @case('5')
                                                            Cliente
                                                            @break
                                                    @endswitch
                                                </td>
                                                <td class="px-6 py-4 text-sm text-gray-500">
                                                    @if ($usuario->estado == 0)
                                                        <div class="text-green-700 font-bold">Activo</div>
                                                    @else
                                                        <div class="text-red-700 font-bold">Desactivo</div>
                                                    @endif
                                                </td>
                                                <td class="px-6 py-4">
                                                    <a href="#" class="px-4 py-1 text-sm text-blue-600 bg-blue-200 rounded-full">Edit</a>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <a href="#" class="px-4 py-1 text-sm text-white bg-blue-700 rounded-full">Ver</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> 
                
                <div class="m-10">
                    hola
                </div>
            </div>
        </div>
    </div>
</x-app-layout>