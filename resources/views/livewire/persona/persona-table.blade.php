 <div>
     <!-- component -->

     
     <div class="bg-white">

        <div class="px-6 py-4 flex items-center"> 
         
            <x-jet-input type="text" wire:model="search" class="w-full form-control" placeholder="Escriba que quiere buscar"/>    
            @livewire('persona.create-persona')
        </div>
 
         <div class="overflow-x-auto border-x border-t"> 
             @if ($personas->count())
                
             <table class="table-auto w-full bg-gray-50">
                 <thead class="border-b">
                     <tr class="bg-gray-100">
                         <th scope="col" class="cursor-pointer text-left  font-medim text-gray-500 p-4 font-medium">
                             ID
                         </th>
                         <th scope="col" class="cursor-pointer text-left  font-medim text-gray-500 p-4 font-medium">
                             NOMBRES
                         </th>
                         <th scope="col" class="cursor-pointer text-left  font-medim text-gray-500 p-4 font-medium">
                             APELLIDOS
                         </th>
                         <th scope="col" class="cursor-pointer text-left  font-medim text-gray-500 p-4 font-medium">
                             FECHA NAC
                         </th>
                          <th scope="col" class="text-left p-4 font-mediu  font-medim text-gray-500m">
                             SEXO
                         </th>
                         <th scope="col" class="text-left p-4 font-mediu  font-medim text-gray-500m">
                             CELULAR
                         </th>
                         <th scope="col" class="text-left p-4 font-mediu  font-medim text-gray-500m">
                             EMAIL
                         </th>  
                         <th scope="col" class="text-left p-4 font-mediu  font-medim text-gray-500m">
                            OPCIONES
                        </th>
                     </tr>
                 </thead>
                 <tbody>
                     @foreach ($personas as $item)
                         
                     
                     <tr class="border-b hover:bg-gray-50">
                         <td class="p-4">
                             {{ $item->id }}
                         </td>
                         <td class="p-4">
                             {{ $item->nombres }}
                         </td>
                         <td class="p-4">
                             {{ $item->apellido_paterno }} {{ $item->apellido_materno }}
                         </td>
                         <td class="p-4">
                             {{ $item->fecha_nac }}
                         </td>
                          <td class="p-4">
                             {{ $item->sexo }}
                         </td>
                         <td class="p-4">
                             {{ $item->celular }}
                         </td>
                         <td class="p-4">
                             {{ $item->email }}
                         </td>  
                         <td class="p-4">
                            EDITAR
                        </td>

                     </tr>
                     @endforeach
 
                 </tbody>
             </table>

             @else
             
             <div class="col-md-4 px-6 py-4 text-center">
                 No existe ningun registro
             </div>

             @endif


         </div>
     </div>

 </div>


 </div>

 @section('js')
 
 @stop
