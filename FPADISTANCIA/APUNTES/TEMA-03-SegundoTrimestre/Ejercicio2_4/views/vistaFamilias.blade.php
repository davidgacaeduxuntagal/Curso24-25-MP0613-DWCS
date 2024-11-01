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
        </tr>
        </thead>
        <tbody>
        @foreach($familias as $item)
            <tr class="text-center">
                <th scope="row">{{$item->cod}}</th>
                <td>{{$item->nombre}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection