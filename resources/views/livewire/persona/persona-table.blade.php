 <div>
     <!-- component -->
     <div class="bg-white">

         <div class="overflow-x-auto border-x border-t">
             <table class="table-auto w-full">
                 <thead class="border-b">
                     <tr class="bg-gray-100">
                         <th class="text-left p-4 font-medium">
                             ID
                         </th>
                         <th class="text-left p-4 font-medium">
                             NOMBRES
                         </th>
                         <th class="text-left p-4 font-medium">
                             APELLIDOS
                         </th>
                         <th class="text-left p-4 font-medium">
                             FECHA NAC
                         </th>
                         <th class="text-left p-4 font-medium">
                             SEXO
                         </th>
                         <th class="text-left p-4 font-medium">
                             CELULAR
                         </th>
                         <th class="text-left p-4 font-medium">
                             EMAIL
                         </th>
                         <th class="text-left p-4 font-medium">
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
         </div>
     </div>

 </div>


 </div>

 @section('js')
 
 @stop
