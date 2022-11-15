@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear</h1>
@stop
@section('content')
    <div class="row">
        <div class="col-md-12">

            {!! Form::open(['route' => 'especialidades.store']) !!}

            <div class="row py-2">
                <div class="col-md-4">
                    {!! Form::label('nombre', 'Nombre') !!}
                    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}

                    @error('nombre')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror 

                </div>  
            </div>

        

            <div class="row py-4">  
                <div class="col-md-4">
                    {!! Form::submit('Agregar', ['class' => 'btn btn btn-info']) !!} 
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
