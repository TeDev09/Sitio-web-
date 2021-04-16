@extends('plantilla')
@section('contenido')
<div class="col s12">
    <div class="divider"></div>
    <h1 class="center">Editar la nota: {{$nota->id}}</h1>
    @if (session('mnsj'))
    <div class="chip">
        <img src="https://th.bing.com/th/id/Rb6a4397743db63db457d6b1007091831?rik=M6kIZwl1oAU4iw&riu=http%3a%2f%2fst2.depositphotos.com%2f1454412%2f5924%2fi%2f950%2fdepositphotos_59246743-stock-photo-big-red-x-button.jpg&ehk=r7ItdEubX8ubwY%2bW08hfrxAZRnR3HNcHgZvgtfFhkzU%3d&risl=&pid=ImgRaw" alt="Error">
        {{ session('mnsj') }}
    </div>
    @endif
    <div class="divider"></div>
</div>
<br>
<br>
<div class="col s6 push-s3">
    <br>
    <div class="divider"></div>
    <form action=" {{ route('notas.update', $nota->id)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="input-field">
            Nombre:<input id="nombre" type="text" value="{{ $nota->nombre }}" name="nombre">
        </div>
        <div class="input-field">
            apellido:<input id="apellido" type="text" value="{{ $nota->apellido }}" name="apellido">
        </div>
        <div class="input-field">
            telefono:<input id="telefono" type="text" value="{{ $nota->telefono }}" name="telefono">
        </div>
        <div class="input-field">
            direccion:<input id="direccion" type="text" value="{{ $nota->direccion }}" name="direccion">
        </div>
        <div class="input-field">
            pago:<input id="pago" type="text" value="{{ $nota->pago }}" name="pago">
        </div>
        <div class="input-field">
            trabajo:<input id="trabajo" type="text" value="{{ $nota->trabajo }}" name="trabajo">
        </div>
        <div class="center">
            <button class="btn yellow waves-effect waves-light" type="submit" name="action">Editar
                <i class="material-icons right">send</i>
            </button>
        </div>
    </form>
    <div class="divider"></div>
</div>
@endsection