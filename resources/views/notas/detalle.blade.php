@extends('plantilla')
@section('contenido')
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .cuadro {
        background-color: white;
        border: 2px solid white;
        width: 100%;

        border-radius: 30px 30px 10px 10px;
    }

    .divi {
        border-top: 6px solid rgb(0, 0, 0);
        width: 100%;
        float: left;
    }
</style>
<div class="divider"></div>
<h1 class="center">Detalle del usuario</h1>
<h2 class="center">ID {{$nota->id}}</h2>
<div class="divider"></div>
<br>
<div class="col s12">
    <div class="cuadro">
        <h4 class="center">Datos personales</h4>
        <div class="divi"></div>
        <table class="highlight" style=" color: black;" data-aos="fade-right">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombres</th>
                    <th>Apelidos</th>
                    <th>Telefono</th>
                    <th>Dirección</th>
                    <th>Correo</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>{{$nota->id}}</td>
                    <td>{{$nota->nombre}}</td>
                    <td>{{$nota->apellido}}</td>
                    <td>{{$nota->telefono}}</td>
                    <td>{{$nota->direccion}}</td>
                    <td>{{$nota->email}}</td>
                </tr>
            </tbody>
        </table>
        <br>
    </div>

    <br>

    <div class="cuadro">
        <h4 class="center">Datos de proyecto</h4>
        <div class="divi"></div>
        <table class="highlight" style=" color: black;" data-aos="fade-right">
            <thead>
                <tr>
                    <th>Proyecto</th>
                    <th>Pago por hora</th>
                    <th>Creado el</th>
                    <th>Actualizado el</th>
                    <th data-aos="fade-up" data-aos-duration="1000">Borrar</th>
                    <th data-aos="fade-up" data-aos-duration="1000">Editar</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>{{$nota->trabajo}}</td>
                    <td>{{$nota->pago}}</td>
                    <td>{{$nota->created_at->format('d M Y H:H ')}}</td>
                    <td>{{$nota->updated_at->format('d M Y H:H')}}</td>
                    <td>
                        <form method="POST" action="{{ route('notas.eliminar', $nota) }}">
                            @method('DELETE')
                            @csrf
                            <button class="btn red" type="submit" name="action">
                                <i class="material-icons">delete_forever</i>
                            </button>
                        </form>
                    </td>
                    <td>
                        <form><a href=" {{route('notas.editar',$nota)}} " class="btn yellow"><i class="material-icons">create</i></a></form>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
    </div>
</div>
</div>
<br>
<script type="text/javascript">
window.addEventListener('load', () => {
            setTimeout(carga);

            function carga() {
                alert('Esta es una página para administrar, borrar y editar datos \nEstas acciones son irreversibles ten cuidado.');
            }
        })
</script>
@endsection