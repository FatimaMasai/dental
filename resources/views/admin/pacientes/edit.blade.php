@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>VER DETALLE</h1>
@stop
@section('content')

 
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('pacientes.update', $paciente->id)}}" method="POST">
                @csrf
                @method('PUT')

                <div class="row py-2">
                    <div class="col-md-4">
                        <label for="x_card_code" class="control-label mb-1">  PACIENTE</label>
                        <input class="form-control" value="{{$paciente->persona->apellido_paterno}}  {{$paciente->persona->apellido_materno}} {{$paciente->persona->nombres}} "  type="text"  >    
                    </div>
                    <div class="col-md-4">
                        <label for="x_card_code" class="control-label mb-1">CARNET IDEN.</label>
                        <input class="form-control" value="{{$paciente->persona->carnet_identidad}}"  type="text"  >
                
                    </div>
                    <div class="col-md-4">
                        <label for="x_card_code" class="control-label mb-1">FECHA NAC.</label>
                        <input class="form-control" value="{{$paciente->persona->fecha_nac}}"  type="text"  >
                    </div> 
                </div>

                <div class="row py-2">
                    <div class="col-md-4">
                        <label for="x_card_code" class="control-label mb-1">  SEXO</label>
                        <input class="form-control" value="{{$paciente->persona->sexo}}"  type="text"  >
                

                    </div>
                    <div class="col-md-4">
                        <label for="x_card_code" class="control-label mb-1">  CELULAR</label>
                        <input class="form-control" value="{{$paciente->persona->celular}}"  type="text"  >

                    </div>
                    <div class="col-md-4">
                        <label for="x_card_code" class="control-label mb-1">  EMAIL</label>
                        <input class="form-control" value="{{$paciente->persona->email}}"  type="text"  >

                    </div> 
                </div>


                <div class="row py-2">
                    <div class="col-md-4">
                        <label for="x_card_code" class="control-label mb-1">  ALERGIA</label>
                        <input class="form-control" value="{{$paciente->alergia}}"  type="text"  >

                    </div> 
                    <div class="col-md-4">
                        <label for="x_card_code" class="control-label mb-1"> OBSERVACION</label>
                        <input class="form-control" value="{{$paciente->observacion}}"  type="text"  >

                    </div> 
                    <div class="col-md-4"> 
                        <label for="x_card_code" class="control-label mb-1">  RECOMENDADO</label>
                        <input class="form-control" value="{{$paciente->recomendado}}"  type="text"  >
                    </div>  
                </div>

                <div class="row py-2">
                    <div class="col-md-4"> 
                        <label for="x_card_code" class="control-label mb-1">  RESPONSABLE</label>
                        <input class="form-control" value="{{$paciente->responsable}}"  type="text"  >
                    </div> 
                    <div class="col-md-4">
                        <label for="x_card_code" class="control-label mb-1">  ANTECEDENTES</label>
                        <input class="form-control" value="{{$paciente->antecedentes}}"  type="text"  >

                    </div>   
                </div> 
        </form>
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
