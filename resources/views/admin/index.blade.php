@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1> 
@stop 
@section('content')
    <p>VISTA DEL HOME </p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop 
@section('js')

<script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    Swal.fire(
    'Good job!',
    'You clicked the button!',
    'success'
  )
</script>
@stop