@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar</h1>
@stop
@section('content')
    <div class="row">
        <div class="col-md-12">

            {!! Form::model($servicio, ['route' => ['servicios.update', $servicio], 'method' => 'put']) !!}
                {!!Form::hidden('id',$servicio->id)!!}

            <div class="row py-2">
                <div class="col-md-4">
                    {!! Form::label('nombre', 'Servicio') !!}
                    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}

                    @error('nombre')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror 

                </div>
                <div class="col-md-4">
                    {!! Form::label('monto', 'Monto  ') !!}
                    {!! Form::text('monto', null, ['class' => 'form-control']) !!}

                    @error('monto')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>
                <div class="col-md-4">
                    {!! Form::label('categoria', 'Categoria') !!} 

                    {!! Form::select('categoria_servicios_id', $categoriaServicio, null, ['class' => 'form-control']) !!}
 


                    
                </div>
            </div>

           


            <div class="row py-4">  
                <div class="col-md-4">
                    {!! Form::submit('Actualizar', ['class' => 'btn btn btn-info']) !!} 
                </div>
            </div>
            {!! Form::close() !!}

        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
