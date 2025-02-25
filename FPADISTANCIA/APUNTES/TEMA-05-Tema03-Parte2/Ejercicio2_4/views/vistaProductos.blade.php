@extends('plantillas.plantilla1')
@section('titulo')
    {{$titulo}}
@endsection
@section('encabezado')
    {{$encabezado}}
@endsection
@section('contenido')
    <table class="table table-striped">
        <thead>
        <tr class="text-center">
            <th scope="col">Código</th>
            <th scope="col">Nombre</th>
            <th scope="col">Nombre Corto</th>
            <th scope="col">Precio</th>
        </tr>
        </thead>
        <tbody>
        @foreach($productos as $item)
            <tr class="text-center">
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->nombre}}</td>
                <td>{{$item->nombre_corto}}</td>
                @if($item->pvp>100)
                    <td class='text-danger'>{{$item->pvp}}</td>
                @else
                    <td class='text-success'>{{$item->pvp}}</td>
                @endif
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection