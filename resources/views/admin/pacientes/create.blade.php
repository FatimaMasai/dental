@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear</h1>
@stop
@section('content')
    <div class="row">
        <div class="col-md-12">

            {!! Form::open(['route' => 'pacientes.store']) !!}

            <div class="row py-2">
                <div class="col-md-4">
                    {!! Form::label('nombres', 'Nombre') !!}
                    {!! Form::text('nombres', null, ['class' => 'form-control']) !!}

                    @error('nombres')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror 

                </div>
                <div class="col-md-4">
                    {!! Form::label('apellido_paterno', 'Apellido Paterno') !!}
                    {!! Form::text('apellido_paterno', null, ['class' => 'form-control']) !!}

                    @error('apellido_paterno')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>
                <div class="col-md-4">
                    {!! Form::label('apellido_materno', 'Apellido Materno') !!}
                    {!! Form::text('apellido_materno', null, ['class' => 'form-control']) !!}

                    @error('apellido_materno')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div> 
            </div>

            <div class="row py-2">
                <div class="col-md-4">
                    {!! Form::label('carnet_identidad', 'Ci') !!}
                    {!! Form::number('carnet_identidad', null, ['class' => 'form-control']) !!}

                    @error('carnet_identidad')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>
                <div class="col-md-4">
                    {!! Form::label('fecha_nac', 'Fecha Nac.  ') !!}
                    {!! Form::date('fecha_nac', null, ['class' => 'form-control']) !!}

                    @error('fecha_nac')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>
                <div class="col-md-4">
                    {!! Form::label('sexo', 'Sexo') !!} 
                    {!!Form::select('sexo', ['Hombre' => 'Hombre', 'Mujer' => 'Mujer'], 'M',['class' => 'form-control form-control-sm'])!!}

                    @error('sexo')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div> 
            </div>


            <div class="row py-2">
                <div class="col-md-4">
                    {!! Form::label('celular', 'Celular  ') !!}
                    {!! Form::number('celular', null, ['class' => 'form-control']) !!}

                    @error('celular')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div> 
                <div class="col-md-4">
                    {!! Form::label('email', 'Email  ') !!}
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}

                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div> 
                <div class="col-md-4">
                    {!! Form::label('alergia', 'Alergia  ') !!}
                    {!! Form::text('alergia', null, ['class' => 'form-control']) !!}

                    @error('alergia')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>  
            </div>

            <div class="row py-2">
                <div class="col-md-4">
                    {!! Form::label('observacion', 'Observacion  ') !!}
                    {!! Form::text('observacion', null, ['class' => 'form-control']) !!}

                    @error('observacion')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div> 
                <div class="col-md-4">
                    {!! Form::label('recomendado', 'Recomendado  ') !!}
                    {!! Form::text('recomendado', null, ['class' => 'form-control']) !!}

                    @error('recomendado')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div> 
                <div class="col-md-4">
                    {!! Form::label('responsable', 'Responsable  ') !!}
                    {!! Form::text('responsable', null, ['class' => 'form-control']) !!}

                    @error('responsable')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>  
            </div>

            <div class="row py-2">
                <div class="col-md-4">
                    {!! Form::label('antecedentes', 'antecedentes  ') !!}
                    {!! Form::text('antecedentes', null, ['class' => 'form-control']) !!}

                    @error('antecedentes')
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
