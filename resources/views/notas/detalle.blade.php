@extends('plantilla')
@section('contenido')
<style>
body{ 
    display: flex;
        justify-content: center;
        align-items: center;
}
.cuadro {
        background-color: white;
        border: 2px solid white;
        width: 100%;

        border-radius: 30px 30px 30px 30px;
    }
</style>
<div class="divider"></div>
<h1 class="center">Detalle del usuario</h1>
<h2 class="center">ID {{$nota->id}}</h2>
<div class="divider"></div>
<br>
<div class="col s12">
        <div class="cuadro">
        <table class="highlight" style=" color: black;" data-aos="fade-right">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombres</th>
                    <th>Apelidos</th>
                    <th>Telefono</th>
                    <th>Dirección</th>
                    <th>Pago hora</th>
                    <th>Trabajo</th>
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
                </tr>
            </tbody>
        </table>
        <br>
        <table class="highlight" style=" color: black;" data-aos="fade-right">
            <thead>
                <tr>
                    <th>Correo</th>
                    <th>Creado el</th>
                    <th>Actualizado el</th>
                    <th data-aos="fade-up" data-aos-duration="1000">Borrar</th>
                            <th data-aos="fade-up" data-aos-duration="1000">Editar</th>
                </tr>
            </thead>
    
            <tbody>
                <tr>
                    <td>{{$nota->email}}</td>
                    <td>{{$nota->created_at->format('d M Y H:H ')}}</td>
                    <td>{{$nota->updated_at->format('d M Y H:H')}}</td>
                    <td>
                                <form method="POST" action="{{ route('notas.eliminar', $nota) }}">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn " type="submit" name="action">
                                        <i class="material-icons right">delete_forever</i>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <a href=" {{route('notas.editar',$nota)}} " class="btn"><i class="material-icons">create</i></a>
                            </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<br>
@endsection