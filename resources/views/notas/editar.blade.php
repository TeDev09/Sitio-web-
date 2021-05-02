@extends('plantilla')
@section('contenido')
<style>
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
<div class="col s12">
    <div class="divider"></div>
    <h1 class="center">Editar el usuario ID: {{$nota->id}}</h1>
    <div class="divider"></div>
</div>
<div class="col s12">
    <br>
    <div class="col s10 push-s1">
        <div class="cuadro">
            <h3 class="center">Editar datos de el usuario</h3>
            @if (session('mnsj'))
            <div class="center">
                <div class="chip">
                    <img src="https://www.pngfind.com/pngs/m/25-256439_6-2-success-png-image-success-png-transparent.png" alt="Error">
                    {{ session('mnsj') }}
                </div>
            </div>
            @endif
            <div class="divi"></div>
            <br>
            <form action=" {{ route('notas.update', $nota->id)}}" method="POST">
                @method('PUT')
                @csrf
                <div class="col s12">
                    <div class="input-field col s5">
                        Nombre:<input id="nombre" type="text" value="{{ $nota->nombre }}" name="nombre">
                    </div>
                    <div class="input-field col s5 push-s2">
                        Apellido:<input id="apellido" type="text" value="{{ $nota->apellido }}" name="apellido">
                    </div>
                </div>
                <div class="col s12">
                    <div class="input-field col s5">
                        Telefono:<input id="telefono" type="text" value="{{ $nota->telefono }}" name="telefono">
                    </div>
                    <div class="input-field col s5 push-s2">
                        Direccion:<input id="direccion" type="text" value="{{ $nota->direccion }}" name="direccion">
                    </div>
                </div>
                <div class="col s12">
                    <div class="input-field col s5">
                        Pago por hora:<input id="pago" type="text" value="{{ $nota->pago }}" name="pago">
                    </div>
                    <div class="input-field col s5 push-s2">
                        Trabajo:<input id="trabajo" type="text" value="{{ $nota->trabajo }}" name="trabajo">
                    </div>
                </div>
                <div class="center">
                    <button class="btn yellow waves-effect waves-light" type="submit" name="action">Editar
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection