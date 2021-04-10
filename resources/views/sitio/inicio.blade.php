@extends('plantilla_simple')
@section('cuadro')
<br>
<div style="background-color: #b1b1b1" class="col s12">
    <h3 class="center">Gestión de empleados</h3>
    <div style="overflow: hidden;">
        <a href="">{{ $notas->links() }}</a>
    </div>
</div>
<br><br>
<div class="contenido section">
    <div class="col s12">
        <p>ㅤ</p>
        <div class="divider"></div>
        <br><br>
        <div>
            <table class="striped" data-aos="fade-up" data-aos-duration="1000">
                <thead>
                    <tr>
                        <th data-aos="fade-up" data-aos-duration="1000">ID</th>
                        <th data-aos="fade-up" data-aos-duration="1000">Nombres</th>
                        <th data-aos="fade-up" data-aos-duration="1000">Apelidos</th>
                        <th data-aos="fade-up" data-aos-duration="1000">Telefono</th>
                        <th data-aos="fade-up" data-aos-duration="1000">Dirección</th>
                        <th data-aos="fade-up" data-aos-duration="1000">Pago hora</th>
                        <th data-aos="fade-up" data-aos-duration="1000">Trabajo</th>
                        <th data-aos="fade-up" data-aos-duration="1000">Creado</th>
                        <th data-aos="fade-up" data-aos-duration="1000">Borrar</th>
                        <th data-aos="fade-up" data-aos-duration="1000">Editar</th>
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
<script>
    AOS.init();
</script>
@endsection