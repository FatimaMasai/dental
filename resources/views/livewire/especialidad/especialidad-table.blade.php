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
                <a href="{{ route('especialidades.create') }}">
                    <button class="btn btn-info">
                        CREAR REGISTRO
                    </button>
                </a>
                {{-- <a href="">
                    <button class="btn btn-danger">
                        Exportar PDF
                    </button>
                </a>
                <a href="">
                   <button class="btn btn-success">
                       Exportar Excel
                   </button>
               </a> --}}
            </div>
        </div>

        <div class="overflow-x-auto border-x border-t">
            @if ($especialidades->count())

                <div class="card-body">

                    <table class="table table-striped table-auto w-full bg-gray-50">
                        <thead class="border-b">
                            <tr class="bg-gray-100">
                                <th scope="col" class="p-4 text-center ">ID </th> 
                                <th scope="col" class="p-4 text-center ">NOMBRE</th>  
                                <th scope="col" class="p-4 text-center ">ESTADO</th> 
                                <th scope="col" class="p-4 text-right"  >OPCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($especialidades as $especialidad)
                                <tr class="border-b hover:bg-gray-50">
                                   {{-- $loop->iteration --}}
                                    <td class="py-4 text-center">{{ $especialidad->id }}</td>  
                                    <td class="py-4 text-center"> {{ $especialidad->nombre }}</td> 
                                    

                                       @if($especialidad->estado==1)
                                           <td class="py-4 text-center"><span class="badge badge-success">{{ 'Activo' }}</span></td>
                                       @elseif($especialidad->estado==2)
                                           <td class="py-4 text-center"><span class="badge badge-danger">{{ 'Inactivo' }}</span></td>
                                       @else
                                           <td class="py-4 text-center"><span class="badge badge-warning">{{ 'Pendiente' }}</span></td>
                                       @endif
                             
                                    <td class="text-right"> 
                                       <div class="d-flex flex-row bd-highlight mb-3 " style="display: flex; justify-content: flex-end">

                                           <div class="p-2 text-right bd-highlight">
                                               <a href="{{ route('especialidades.edit', $especialidad) }}" class="btn-sm btn text-right btn-primary">
                                                   <i class="fas fa-edit"></i>
                                               </a>
                                           </div>

                                           <div class="p-2 text-right bd-highlight">
                                               <form action="{{ route('especialidades.destroy', $especialidad->id) }}" class="d-inline text-right formulario-eliminar" method="POST">
                                                   @csrf
                                                   @method('delete')
                                                   <button type="submit" class="btn-sm btn btn-danger text-right">
                                                       <i class="fa fa-trash" aria-hidden="true"></i>
                                                   </button>
                                               </form>
                                           </div>

                                       </div> 
                                   </td> 

                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

                <div class="card-footer">
                   {{$especialidades->links()}}
               </div>

            @else
                <div class="col-md-4 px-6 py-4 text-center">
                    No existe ningun registro
                </div> 
            @endif 
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
