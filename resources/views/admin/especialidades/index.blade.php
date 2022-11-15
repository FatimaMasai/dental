@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>LISTADO DE ESPECIALIDAD</h1>
@stop

@livewireStyles
@section('content')
     @livewire('especialidad.especialidad-table')
@stop
@livewireScripts
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

 
@stop