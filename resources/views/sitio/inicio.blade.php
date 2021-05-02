@extends('plantilla_simple')
@section('cuadro')
<style>
body {
    text-decoration: none !important;
}
</style>
<br>
<div style="background-color: #b1b1b1" class="col s12">
    <h3 class="center">Gestión de empleados</h3>
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
                        <th data-aos="fade-up" data-aos-duration="1000">Proyecto</th>
                        <th data-aos="fade-up" data-aos-duration="1000">Detalles/Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($notas as $item)
                    <tr>
                        <th>{{$item->id}}</th>
                        <td data-aos="fade-up" data-aos-duration="1000">{{$item->nombre}}</td>
                        <td data-aos="fade-up" data-aos-duration="1000">{{$item->apellido}}</td>
                        <td data-aos="fade-up" data-aos-duration="1000">{{$item->telefono}}</td>
                        <td data-aos="fade-up" data-aos-duration="1000">{{$item->direccion}}</td>
                        <td data-aos="fade-up" data-aos-duration="1000">{{$item->trabajo}}</td>
                        <td data-aos="fade-up" data-aos-duration="1000"><a href="{{ route('notas.detalle', $item) }}">Administrar<i class="small material-icons left">insert_chart</i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="divider"></div>
            <br>
            <div  class="col s4 push-s4 center" style="background-color:#a0a0a0;">
                <div data-aos="fade-up" data-aos-duration="1000"><a href="">{{ $notas->links() }}</a></div>
            </div>
            <br>
        </div>
        <br><br>
    </div>

</div>
</br>
<script>
    AOS.init();
</script>
@endsection