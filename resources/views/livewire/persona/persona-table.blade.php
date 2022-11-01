 <div>
     <!-- component -->

     
     <div class="bg-white">

        <div class="row px-3">
            
            <div class="col-md-6 px-6 py-4">  
                <x-jet-input type="text" wire:model="search" class="w-full form-control" placeholder="Escriba que quiere buscar"/>    
            </div>
            <div class="col-md-2"></div>

            <div class="col-md-4 py-4">
                <a href="{{route('personas.create')}}">
                <button class="btn btn-info">
                    CREAR REGISTRO
                </button>
            </a>
                <button class="btn btn-danger">
                    PDF
                </button>
                <button class="btn btn-success">
                    EXCEL
                </button>
            </div> 
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
                         {{-- <th scope="col" class="cursor-pointer text-left  font-medim text-gray-500 p-4 font-medium">
                             FECHA NAC
                         </th> --}}
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
                         {{-- <td class="p-4">
                             {{ $item->fecha_nac }}
                         </td> --}}
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
                            <a href="" class="btn-sm btn btn-primary">EDITAR</a>
                            <a href="" class="btn-sm btn btn-danger">ELIMINAR</a>
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
 {{-- <script>
    Swal.fire(
    'Good job!',
    'You clicked the button!',
    'success'
  )
</script> --}}
 @stop
