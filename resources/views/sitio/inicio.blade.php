@extends('plantilla_sitio')
@section('cuadro')
<br>
<div style="background-color: #b1b1b1" class="col s12">
    <h3>Gestión de empleados</h3>

</div>
<br><br>
<div class="contenido section">
  <div class="col s12">
    <p>ㅤ</p>
    <div class="divider"></div>
    <br><br>
    <div>
        <table class="striped" data-aos="fade-right">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombres</th>
                    <th>Apelidos</th>
                    <th>Telefono</th>
                    <th>Dirección</th>
                    <th>Pago hora</th>
                    <th>Trabajo</th>
                    <th>Creado</th>
                    <th>Borrar</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($notas as $item)
                <tr>
                    <th><a href="{{ route('notas.detalle', $item) }}">{{$item->id}}</a></th>
                    <td>
                        {{$item->nombre}}
                    </td>
                    <td>{{$item->apellido}}</td>
                    <td>{{$item->telefono}}</td>
                    <td>{{$item->direccion}}</td>
                    <td>{{$item->pago}}</td>
                    <td>{{$item->trabajo}}</td>
                    <td>{{$item->created_at->format('d M Y')}}</td>
                    <td>
                        <form method="POST" action="{{ route('notas.eliminar', $item) }}">
                            @method('DELETE')
                            @csrf
                            <button class="btn " type="submit" name="action">
                                <i class="material-icons right">delete_forever</i>
                            </button>
                        </form>
                    </td>
                    <td>
                        <a href=" {{route('notas.editar',$item)}} " class="btn"><i class="material-icons">create</i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    <div class="divider"></div>
    </div>
    <br><br>
</div>

</div>
</br>
@endsection