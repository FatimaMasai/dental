@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar</h1>
@stop
@section('content')

 
    <div class="row">
        <div class="col-md-12">
            {!! Form::model($proveedore, ['route' => ['proveedores.update', $proveedore], 'method' => 'put']) !!}
                {!!Form::hidden('id',$proveedore->id)!!}

                <div class="row py-2">
                    <div class="col-md-4">
                        <label for="x_card_code" class="control-label mb-1">  NOMBRE</label>
                        <input class="form-control" name="nombres" value="{{$proveedore->persona->nombres }} "  type="text" >    
                    </div>
                    <div class="col-md-4">
                        <label for="x_card_code" class="control-label mb-1">APELLIDO PATERNO  </label>
                        <input class="form-control" name="apellido_paterno" value="{{$proveedore->persona->apellido_paterno}}  "  type="text" >    
                    </div>
                    <div class="col-md-4">
                        <label for="x_card_code" class="control-label mb-1">  APELLIDO MATERNO</label>
                        <input class="form-control" name="apellido_materno" value="{{$proveedore->persona->apellido_materno}} "  type="text" >    
                    </div>
                    
                </div>

                <div class="row py-2">
                    <div class="col-md-4">
                        <label for="x_card_code" class="control-label mb-1">CARNET IDEN.</label>
                        <input class="form-control" name="carnet_identidad" value="{{$proveedore->persona->carnet_identidad}}"  type="text" >
                
                    </div>
                    <div class="col-md-4">
                        <label for="x_card_code" class="control-label mb-1">FECHA NAC.</label>
                        <input class="form-control" name="fecha_nac" value="{{$proveedore->persona->fecha_nac}}"  type="text" >
                    </div> 
                    <div class="col-md-4">
                        <label for="x_card_code" class="control-label mb-1">  SEXO</label> 
                          <select  class="custom-select form-control form-control-sm" id="sexo" name="sexo" type="text"> 
                                  
                                  <option value="Hombre" @if($proveedore->persona->sexo == "Hombre"){{ 'selected' }} @endif >Hombre</option>     
                                  <option value="Mujer" @if($proveedore->persona->sexo == "Mujer"){{ 'selected' }} @endif   >Mujer</option>                                                         
                          </select>  

                    </div>
                   
                </div>


                <div class="row py-2">
                    <div class="col-md-4">
                        <label for="x_card_code" class="control-label mb-1">  CELULAR</label>
                        <input class="form-control" name="celular" value="{{$proveedore->persona->celular}}"  type="text" >

                    </div>
                    <div class="col-md-4">
                        <label for="x_card_code" class="control-label mb-1">  EMAIL</label>
                        <input class="form-control" name="email" value="{{$proveedore->persona->email}}"  type="text" >

                    </div> 

                    <div class="col-md-4">
                        <label for="x_card_code" class="control-label mb-1">  Empresa</label>
                        <select  class="custom-select form-control form-control-sm" id="empresa" name="empresa" type="text"> 
                            <option value="Enfoque" @if($proveedore->empresa == "Enfoque"){{ 'selected' }} @endif   >Enfoque</option>
                            <option value="Dental" @if($proveedore->empresa == "Dental"){{ 'selected' }} @endif >Dental</option>                                                              
                    </select> 

                    </div> 
                  
                </div>

                <div class="row py-2">
                    <div class="col-md-4">
                        <label for="x_card_code" class="control-label mb-1"> NIT</label>
                        <input class="form-control" name="nit" value="{{$proveedore->nit}}"  type="number" >

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
