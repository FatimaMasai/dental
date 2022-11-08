 <div>
     <!-- component -->


     <div class="bg-white">

         <div class="row px-3">

             <div class="col-md-6 px-6 py-4">
                 <x-jet-input type="text" wire:model="search" class="w-full form-control"
                     placeholder="Escriba que quiere buscar" />
             </div>
             <div class="col-md-2"></div>

             <div class="col-md-4 py-4">
                 <a href="{{ route('personas.create') }}">
                     <button class="btn btn-info">
                         CREAR REGISTRO
                     </button>
                 </a>
                 <a href="{{ url('admin/reportes/personas') }}">
                     <button class="btn btn-danger">
                         Exportar PDF
                     </button>
                 </a>
                 <button class="btn btn-success">
                     EXCEL
                 </button>
             </div>
         </div>

         <div class="overflow-x-auto border-x border-t">
             @if ($personas->count())

                 <div class="card-body">

                     <table class="table table-striped table-auto w-full bg-gray-50">
                         <thead class="border-b">
                             <tr class="bg-gray-100">
                                 <th scope="col"
                                     class="cursor-pointer text-left  font-medim text-gray-500 p-4 font-medium">
                                     ID
                                 </th>
                                 <th scope="col"
                                     class="cursor-pointer text-left  font-medim text-gray-500 p-4 font-medium">
                                     NOMBRES
                                 </th>
                                 <th scope="col"
                                     class="cursor-pointer text-left  font-medim text-gray-500 p-4 font-medium">
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
                             @foreach ($personas as $persona)
                                 <tr class="border-b hover:bg-gray-50">
                                     <td>
                                         {{ $persona->id }}
                                     </td>
                                     <td>
                                         {{ $persona->nombres }}
                                     </td>
                                     <td>
                                         {{ $persona->apellido_paterno }} {{ $persona->apellido_materno }}
                                     </td>
                                     {{-- <td >
                             {{ $persona->fecha_nac }}
                         </td> --}}
                                     <td>
                                         {{ $persona->sexo }}
                                     </td>
                                     <td>
                                         {{ $persona->celular }}
                                     </td>
                                     <td>
                                         {{ $persona->email }}
                                     </td>
                                     <td width="10px">
                                         <a href="{{ route('personas.edit', $persona) }}  "
                                             class="btn-sm btn btn-primary">EDITAR</a>
                                     </td>
                                     <td width="10px">
                                         <form action="{{ route('personas.destroy', $persona) }}"
                                             class="d-inline formulario-eliminar" method="POST">
                                             @csrf
                                             @method('delete')
                                             <button type="submit" class="btn-sm btn btn-danger">
                                                 Eliminar
                                             </button>
                                         </form>
                                     </td>

                                 </tr>
                             @endforeach

                         </tbody>
                     </table>
                 </div>
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
     <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

     {{-- CREAR UN NUEVO REGISTRO --}}

     @if (session('guardar'))
         <script>
             Swal.fire(
                 'Éxito!',
                 'El Registro se creó',
                 'success'
             )
         </script>
     @endif

     {{-- ACTUALIZAR REGISTRO --}}

     @if (session('actualizar'))
         <script>
             Swal.fire(
                 'Éxito!',
                 'El Registro se actualizo',
                 'success'
             )
         </script>
     @endif

     {{-- ELIMINAR REGISTRO --}}
     <script>
         $('.formulario-eliminar').submit(function(e) {
             e.preventDefault();

             Swal.fire({
                 title: '¿Está seguro?',
                 text: "¡No podrás revertir esto!",
                 icon: 'warning',
                 showCancelButton: true,
                 confirmButtonColor: '#3085d6',
                 cancelButtonColor: '#d33',
                 confirmButtonText: '¡Sí, bórralo!'
             }).then((result) => {
                 if (result.isConfirmed) {
                     this.submit();

                 }
             })

         });
     </script>

     @if (session('eliminar') == 'ok')
         <script>
             Swal.fire(
                 '¡Eliminado!',
                 'El registro ha sido eliminado.',
                 'success'
             )
         </script>
     @endif

 @stop
