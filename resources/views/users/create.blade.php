<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Crear Cuentas de Usuarios
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container mx-auto m-5">
                    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-3">
                        <div class="bg-blue-100">
                        <button><a href="{{ route('createJuez') }}"><img src="https://th.bing.com/th/id/OIP.Uri74sJ2xOtVBOOpLU1CXwHaHa?pid=ImgDet&rs=1" alt=""></a></button>                           
                        <h1 class="text-center">Juez</h1>
                        </div>
                        <div class="bg-blue-100">
                        <button><a href="{{ route('createAbogado') }}"><img src="https://th.bing.com/th/id/OIP.Uri74sJ2xOtVBOOpLU1CXwHaHa?pid=ImgDet&rs=1" alt=""></a></button>                           
                        <h1 class="text-center">Abogado</h1>
                        </div>
                        <div class="bg-blue-100">
                        <button><a href="{{ route('createProcurador') }}"><img src="https://cracksmaster.com/wp-content/uploads/2017/09/avatar.jpg" alt=""></a></button>
                        <h1 class="text-center">Procurador</h1>
                        </div>
                    </div>

                    <div class="container mt-10">
                        <h1 class="text-center">
                            Seleccione una opción
                        </h1>
                    </div>
               </div>
            </div>
        </div>
    </div>
</x-app-layout>