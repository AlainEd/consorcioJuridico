@section('title', 'Procesos')
@section('script')
<script>
  
    $(document).ready(function() {
        $('#table-inscripcion').DataTable( {
            destroy: true,
            paging:   true,
            pageLength: 5,
            ordering: true,
            info:     true,
            responsive: true,
            autoWidth: false,    
       
            language: {
                "lengthMenu": 'Mostrar <select class = "custom-select form-select form-select-sm">'+
                    '<option value="5">5</option>'+
                    '<option value="25">25</option>'+
                    '<option value="50">50</option>'+
                    '<option value="-1">Todos</option>'+
                    '</select> registros',
                "zeroRecords": "No existen resultados",
                "info": "Mostrando _PAGE_ de _PAGES_",
                "infoEmpty": "No hay resultados",
                "infoFiltered": "(filtrado de _MAX_ registros totales)",
                "search": "Buscar:",
                "paginate": {
                    "first":      "Primero",
                    "last":       "Último",
                    "next":       "Siguiente",
                    "previous":   "Anterior"
                },
            }
        } );
    } );
</script>
<script>
    $(document).ready(function(){ 

    var table = $('#table-procesos').DataTable();

    $('#searchbox').on('keyup', function () {
       console.log("hola");
    table.search( this.value ).draw();
    } );
});

</script>
@endsection
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
                    <div class="pt-2 relative mx-auto text-gray-600 col-start-2 col-span-4">
                        <input class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                          id="searchbox" type="search" name="search" placeholder="Buscar" size="40" value="hola">
                        
                        
                      </div>
                    <div class="col-start-5">
                        @if (Auth::user()->id_rol == 3)
                            <a href="{{ route('procesos.create') }}" class="px-4 py-1 text-sm text-white bg-green-700 rounded-full">Crear Nuevo Proceso</a>
                        @endif
                    </div>
                </div>
                    

                <div class="flex justify-center mx-auto">
                    <div class="flex flex-col">
                        <div class="w-full">
                            <div class="border-b border-gray-200 shadow mb-10" id="table-procesos">
                                <table class="divide-y divide-gray-300" id="table-procesos">
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
                                                @if (Auth::user()->id_rol == 3 || Auth::user()->id_rol == 4)
                                                    <a href="{{ route('procesos.edit', $proceso) }}" class="px-4 py-1 text-sm text-white bg-green-700 rounded-full">Editar</a>
                                                    <a href="#" class="px-4 py-1 text-sm text-white bg-red-700 rounded-full">Eliminar</a>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <h1>Hola</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
