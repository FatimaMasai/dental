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
                                <input class="form-control" name="nombres" required type="text">

                                @error('nombres')
                                    <span class="txt-danger">{{$message}}</span>   
                                @enderror

                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Apellido Paterno: </label>
                                <input class="form-control" name="apellido_paterno" required type="text">

                                @error('apellido_paterno')
                                    <span class="txt-danger">{{$message}}</span>   
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Apellido Materno: </label>
                                <input class="form-control" name="apellido_materno" required type="text">
                                @error('apellido_materno')
                                    <span class="txt-danger">{{$message}}</span>   
                                @enderror
                            </div>
                        </div> 
                    </div>
                    <div class="row">
                        
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Cédula Identidad: </label>
                                <input class="form-control" name="carnet_identidad" required type="number">
                                @error('carnet_identidad')
                                    <span class="txt-danger">{{$message}}</span>   
                                @enderror
                            </div>
                        </div> 
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Fecha Nac.: </label>
                                <input class="form-control" name="fecha_nac" required type="date">
                                @error('fecha_nac')
                                    <span class="txt-danger">{{$message}}</span>   
                                @enderror
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
                                <input class="form-control" name="celular" required type="number">
                                @error('celular')
                                    <span class="txt-danger">{{$message}}</span>   
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Email: </label>
                                <input class="form-control" name="email" required type="email">
                                @error('email')
                                    <span class="txt-danger">{{$message}}</span>   
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Direccion: </label>
                                <input class="form-control" name="direccion" required type="text" >
                            </div>
                        </div>  --}}
                    </div> 
                    
                </div> 
                <div class="form-layout-footer">
                    <button required type="submit" class="btn btn-info">Grabar</button>
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