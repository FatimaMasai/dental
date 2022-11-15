@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar</h1>
@stop
@section('content')

 
    <div class="row">
        <div class="col-md-12">
            {!! Form::model($doctore, ['route' => ['doctores.update', $doctore], 'method' => 'put']) !!}
                {!!Form::hidden('id',$doctore->id)!!}

                    <div class="row py-2">
                        <div class="col-md-4">
                            <label for="x_card_code" class="control-label mb-1">  NOMBRE</label>
                            <input class="form-control" name="nombres" value="{{$doctore->persona->nombres }} "  type="text" >    
                        </div>
                        <div class="col-md-4">
                            <label for="x_card_code" class="control-label mb-1">APELLIDO PATERNO  </label>
                            <input class="form-control" name="apellido_paterno" value="{{$doctore->persona->apellido_paterno}}  "  type="text" >    
                        </div>
                        <div class="col-md-4">
                            <label for="x_card_code" class="control-label mb-1">  APELLIDO MATERNO</label>
                            <input class="form-control" name="apellido_materno" value="{{$doctore->persona->apellido_materno}} "  type="text" >    
                        </div>
                        
                    </div>

                    <div class="row py-2">
                        <div class="col-md-4">
                            <label for="x_card_code" class="control-label mb-1">CARNET IDEN.</label>
                            <input class="form-control" name="carnet_identidad" value="{{$doctore->persona->carnet_identidad}}"  type="text" >
                    
                        </div>
                        <div class="col-md-4">
                            <label for="x_card_code" class="control-label mb-1">FECHA NAC.</label>
                            <input class="form-control" name="fecha_nac" value="{{$doctore->persona->fecha_nac}}"  type="text" >
                        </div> 
                        <div class="col-md-4">
                            <label for="x_card_code" class="control-label mb-1">  SEXO</label> 
                              <select  class="custom-select form-control form-control-sm" id="sexo" name="sexo" type="text"> 
                                      <option value="Mujer" @if($doctore->persona->sexo == "Mujer"){{ 'selected' }} @endif   >Mujer</option>
                                      <option value="Hombre" @if($doctore->persona->sexo == "Hombre"){{ 'selected' }} @endif >Hombre</option>                                                              
                              </select>  

                        </div>
                       
                    </div>


                    <div class="row py-2">
                        <div class="col-md-4">
                            <label for="x_card_code" class="control-label mb-1">  CELULAR</label>
                            <input class="form-control" name="celular" value="{{$doctore->persona->celular}}"  type="text" >

                        </div>
                        <div class="col-md-4">
                            <label for="x_card_code" class="control-label mb-1">  EMAIL</label>
                            <input class="form-control" name="email" value="{{$doctore->persona->email}}"  type="text" >

                        </div> 

                        <div class="col-md-4">
                            <label for="x_card_code" class="control-label mb-1"> Especialidad</label> 
                              <select  class="custom-select form-control form-control-sm" id="especialidad" name="especialidad" type="text"> 
                                      <option value="Ortodoncia" @if($doctore->especialidad == "Ortodoncia"){{ 'selected' }} @endif   >Ortodoncia</option>
                                      <option value="Cirugia" @if($doctore->especialidad == "Cirugia"){{ 'selected' }} @endif >Cirugia</option>                                                              
                              </select>  

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
