@extends('plantilla')
@section('contenido')
<div class="divider"></div>
<h1 class="center">ID {{$nota->id}}</h1>
<div class="divider"></div>
<h4 class="center">Detalle de la nota</h4>
<br>
<div class="col s6 push-s3">
    <table style="background-color: #586063; color: black;" data-aos="fade-right">
        <thead>
            <tr>
            <th>ID</th>
                <th>Nombres</th>
                <th>Apelidos</th>
                <th>Telefono</th>
                <th>Dirección</th>
                <th>Pago hora</th>
                <th>Trabajo</th>
                <th>Descripción</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>{{$nota->nombre}}</td>
                <td>{{$nota->descripcion}}</td>
                <td>{{$nota->apellido}}</td>
                <td>{{$nota->telefono}}</td>
                <td>{{$nota->direccion}}</td>
                <td>{{$nota->pago}}</td>
                <td>{{$nota->trabajo}}</td>
                <td>{{$nota->descripcion}}</td>
            </tr>
        </tbody>
    </table>
</div>
<br>
@endsection