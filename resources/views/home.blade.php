@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop
@livewireStyles

@section('content')
    <p>BIENVENIDO.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
@livewireScripts
@section('js')
    <script> console.log('Hi!'); </script>
@stop