<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registrar paciente') }}
        </h2>
    </x-slot>

@section('title', 'Nuevo paciente')


<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">



           
                
                <div class="bg-white py-6 sm:py-8 lg:py-12">
                    <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
                    
                      <!-- form - start -->
                      <form action="{{ route('guardar') }}" method="POST" class="max-w-screen-md grid sm:grid-cols-2 gap-4 mx-auto">
                        @csrf
                        <div>
                          <label for="Nombre" class="inline-block text-gray-800 text-sm sm:text-base mb-2">Nombre*</label>
                          <input name="Nombre" class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
                        </div>
                  
                        <div>
                          <label for="Apellido Paterno" class="inline-block text-gray-800 text-sm sm:text-base mb-2">Apellido Paterno*</label>
                          <input name="Apellido_Paterno" class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
                        </div>
                  
                        <div class="sm:col-span-2">
                          <label for="Apellido Materno" class="inline-block text-gray-800 text-sm sm:text-base mb-2">Apellido Materno*</label>
                          <input name="Apellido_Materno" class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
                        </div>
                  
                  
                        <div class="sm:col-span-2">
                          <label for="fecha de nacimiento" class="inline-block text-gray-800 text-sm sm:text-base mb-2">Fecha de nacimiento*</label>
                          <input name="Fecha_de_nacimiento" type="date" class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
                        </div>
                  
                        
                  
                        <div class="sm:col-span-2 flex justify-between items-center">
                          <button type="submit" class="inline-block bg-indigo-500 hover:bg-indigo-600 active:bg-indigo-700 focus-visible:ring ring-indigo-300 text-white text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3">Guardar</button>
                  
                          <span class="text-gray-500 text-sm">*Required</span>
                        </div>
                  
                        <p class="text-gray-400 text-xs">By signing up to our newsletter you agree to our <a href="#" class="hover:text-indigo-500 active:text-indigo-600 underline transition duration-100">Privacy Policy</a>.</p>
                      </form>
                      <!-- form - end -->
                    </div>
                  </div>
            
            
        </div>
    </div>
</div>


</x-app-layout>



