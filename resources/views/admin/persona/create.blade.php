@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop 
@section('content')
    <div class="row">
        <div class="col-md-12">

            
            <form action="{{route('personas.store')}}" method="POST">
                @csrf
                <div class="form-layout form-layout-1">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Nombres: </label>
                                <input class="form-control" name="nombres" type="text" required  >
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Apellido Paterno: </label>
                                <input class="form-control" name="apellido_paterno" type="text" required>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Apellido Materno: </label>
                                <input class="form-control" name="apellido_materno" type="text" required  >
                            </div>
                        </div> 
                    </div>
                    <div class="row">
                        
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Cédula Identidad: </label>
                                <input class="form-control" name="carnet_identidad" type="number"  >
                            </div>
                        </div> 
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Fecha Nac.: </label>
                                <input class="form-control" name="fecha_nac" type="date"  >
                            </div>
                        </div> 
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Sexo: </label>
                                 
                                <select name="" id="" class="form-control"> 
                                    <option value="Hombre" selected>
                                        Hombre
                                    </option> 
                                    <option value="Mujer">
                                        Mujer
                                    </option> 
                                
                            </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Celular: </label>
                                <input class="form-control" name="celular" type="number">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Email: </label>
                                <input class="form-control" name="email" type="text" required>
                            </div>
                        </div>
                        {{-- <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Direccion: </label>
                                <input class="form-control" name="direccion" type="text" required>
                            </div>
                        </div>  --}}
                    </div> 
                    
                </div> 
                <div class="form-layout-footer">
                    <button type="submit" class="btn btn-info">Grabar</button>
                </div> 
            </form>

        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop 
@section('js')
    <script> console.log('Hi!'); </script>
@stop