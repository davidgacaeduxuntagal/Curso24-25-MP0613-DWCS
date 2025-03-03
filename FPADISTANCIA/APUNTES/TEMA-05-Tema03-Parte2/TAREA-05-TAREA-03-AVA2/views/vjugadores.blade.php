@extends('plantillas.plantilla1')
@section('titulo')
    {{$titulo}}
@endsection
@section('encabezado')
    {{$encabezado}}
@endsection
@section('contenido')
    @if (isset($mensaje))
        <div class="alert alert-success h-100 mt-3">
            <p>{{ $mensaje }}</p>
        </div>
    @endif
    <a href='fcrear.php' class='btn btn-success mt-2 mb-2'><i class='fa fa-plus'></i> Nuevo Jugador</a>
    <table class="table table-striped table-dark">
        <thead>
        <tr class="text-center" style="font-width: bold; font-size:1.1rem">
            <th scope="col">Nombre Completo</th>
            <th scope="col">Posición</th>
            <th scope="col">Dorsal</th>
            <th scope="col">Código de Barras</th>
        </tr>
        </thead>
        <tbody>
        @foreach($jugadores as $item)
            <tr class="text-center">
                <th scope="row">{{$item->apellidos.", ".$item->nombre}}</th>
                <td>{{$item->posicion}}</td>
                @if(isset($item->dorsal))
                    <td>{{$item->dorsal}}</td>
                @else
                    <td>Sin Asignar</td>
                @endif
                <td class="d-flex justify-content-center">@php echo $d->getBarcodeHTML($item->barcode, 'EAN13',2,33, 'white') @endphp</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection