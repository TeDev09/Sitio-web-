@extends('plantilla')
@section('contenido')
<div class="divider"></div>
<h1 class="center">Detalle de la nota</h1>
<h2 class="center">ID {{$nota->id}}</h2>
<div class="divider"></div>
<br>
<div class="col s12">
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
                <th>Correo</th>
                <th>Creado el</th>
                <th>Actualizado el</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>{{$nota->id}}</td>
                <td>{{$nota->nombre}}</td>
                <td>{{$nota->apellido}}</td>
                <td>{{$nota->telefono}}</td>
                <td>{{$nota->direccion}}</td>
                <td>{{$nota->pago}}</td>
                <td>{{$nota->trabajo}}</td>
                <td>{{$nota->email}}</td>
                <td>{{$nota->created_at->format('d M Y H:H ')}}</td>
                <td>{{$nota->updated_at->format('d M Y H:H')}}</td>
            </tr>
        </tbody>
    </table>
</div>
<br>
@endsection