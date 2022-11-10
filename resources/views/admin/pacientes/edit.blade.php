@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>EDITAR</h1>
@stop
@section('content')

 
    <div class="row">
        <div class="col-md-12">
            {!! Form::model($paciente, ['route' => ['pacientes.update', $paciente], 'method' => 'put']) !!}
                {!!Form::hidden('id',$paciente->id)!!}

                    <div class="row py-2">
                        <div class="col-md-4">
                            <label for="x_card_code" class="control-label mb-1">  NOMBRE</label>
                            <input class="form-control" name="nombres" value="{{$paciente->persona->nombres }} "  type="text" >    
                        </div>
                        <div class="col-md-4">
                            <label for="x_card_code" class="control-label mb-1">APELLIDO PATERNO  </label>
                            <input class="form-control" name="apellido_paterno" value="{{$paciente->persona->apellido_paterno}}  "  type="text" >    
                        </div>
                        <div class="col-md-4">
                            <label for="x_card_code" class="control-label mb-1">  APELLIDO MATERNO</label>
                            <input class="form-control" name="apellido_materno" value="{{$paciente->persona->apellido_materno}} "  type="text" >    
                        </div>
                        <div class="col-md-4">
                            <label for="x_card_code" class="control-label mb-1">CARNET IDEN.</label>
                            <input class="form-control" name="carnet_identidad" value="{{$paciente->persona->carnet_identidad}}"  type="text" >
                    
                        </div>
                        <div class="col-md-4">
                            <label for="x_card_code" class="control-label mb-1">FECHA NAC.</label>
                            <input class="form-control" name="fecha_nac" value="{{$paciente->persona->fecha_nac}}"  type="text" >
                        </div> 
                    </div>

                    <div class="row py-2">
                        <div class="col-md-4">
                            <label for="x_card_code" class="control-label mb-1">  SEXO</label>
                            <input class="form-control" name="sexo" value="{{$paciente->persona->sexo}}"  type="text" >
                    

                        </div>
                        <div class="col-md-4">
                            <label for="x_card_code" class="control-label mb-1">  CELULAR</label>
                            <input class="form-control" name="celular" value="{{$paciente->persona->celular}}"  type="text" >

                        </div>
                        <div class="col-md-4">
                            <label for="x_card_code" class="control-label mb-1">  EMAIL</label>
                            <input class="form-control" name="email" value="{{$paciente->persona->email}}"  type="text" >

                        </div> 
                    </div>


                    <div class="row py-2">
                        <div class="col-md-4">
                            <label for="x_card_code" class="control-label mb-1">  ALERGIA</label>
                            <input class="form-control" name="alergia" value="{{$paciente->alergia}}"  type="text" >

                        </div> 
                        <div class="col-md-4">
                            <label for="x_card_code" class="control-label mb-1"> OBSERVACION</label>
                            <input class="form-control" name="observacion" value="{{$paciente->observacion}}"  type="text" >

                        </div> 
                        <div class="col-md-4"> 
                            <label for="x_card_code" class="control-label mb-1">  RECOMENDADO</label>
                            <input class="form-control" name="recomendado" value="{{$paciente->recomendado}}"  type="text" >
                        </div>  
                    </div>

                    <div class="row py-2">
                        <div class="col-md-4"> 
                            <label for="x_card_code" class="control-label mb-1">  RESPONSABLE</label>
                            <input class="form-control" name="responsable" value="{{$paciente->responsable}}"  type="text" >
                        </div> 
                        <div class="col-md-4">
                            <label for="x_card_code" class="control-label mb-1">  ANTECEDENTES</label>
                            <input class="form-control" name="antecedentes" value="{{$paciente->antecedentes}}"  type="text" >

                        </div>   
                    </div> 

                    <div class="form-layout-footer">
                        <input type="submit" class="btn btn-primary" value="ACTUALIZAR">
                    
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
