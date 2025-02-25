@extends('plantillas.plantilla1')
@section('titulo')
    {{$titulo}}
@endsection
@section('encabezado')
    {{$encabezado}}
@endsection

@section('contenido')
    <a href="productos.php" class="btn btn-info mr-4">Acceder a Productos</a>
    <a href="familias.php" class="mr-4 btn btn-info">Acceder a Familias</a>
@endsection