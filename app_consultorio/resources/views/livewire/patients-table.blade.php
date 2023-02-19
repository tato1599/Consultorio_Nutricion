<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Pacientes') }}
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div>
                

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nombre
                </th>
                <th scope="col" class="px-6 py-3">
                    Apellido Paterno
                </th>
                <th scope="col" class="px-6 py-3">
                    Apellido Materno
                </th>
                <th scope="col" class="px-6 py-3">
                    Fecha de nacimiento
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Editar</span>
                </th>
            </tr>
        </thead>
        <tbody>

            @foreach ($consulta as $consultas )
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$consultas->Nombre}}
                </th>
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$consultas->Apellido_Paterno}}
                </td>
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$consultas->Apellido_Materno}}
                </td>
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$consultas->Fecha_de_nacimiento}}
                </td>
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar paciente</a>
                </td>
            </tr>
            @endforeach

            
          
           
        </tbody>
    </table>
</div>


            </div>
            <div>
            </div>
</div>