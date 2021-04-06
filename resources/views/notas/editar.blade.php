@extends('plantilla')
@section('contenido')
<div class="col s12">
    <div class="divider"></div>
    <h1 class="center">Editar la nota: {{$nota->id}}</h1>
    <div class="divider"></div>
</div>
<br>
@error('nombre')
<div class="center">
    <p class="green">
        No has introducido el nombre
    </p>
</div>
@enderror
@if (session('mnsj'))
<br><br><br><br><br><br>
<div class="green">
    <p class="center">
        {{ session('mnsj') }}
    </p>
</div>
@endif
@error('descripcion')
<div class="center">
    <p class="green">
        No has introducido la descripcion
    </p>
</div>
@enderror
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
        <div class="input-field">
        descripcion:<input id="descripcion" type="text" value="{{ $nota->descripcion}}" name="descripcion">
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