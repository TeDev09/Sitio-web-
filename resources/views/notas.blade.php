@extends('plantilla_system')
@section('cuadro')
<style>
    body {
        background-color: #d3d1d2;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .cuadro {
        background-color: white;
        border: 2px solid white;
        width: 600px;

        border-radius: 30px 30px 30px 30px;
    }

    .cuadro_error {
        background-color: #eaeaea;
        border: 2px solid white;
        width: 300px;
        border-radius: 30px 30px 30px 30px;
    }

    .p_error {
        border-radius: 30px 30px 30px 30px;
        background-color: #d90000;
        color: white;
    }

    .divi {
        border-top: 6px solid rgb(0, 0, 0);
        width: 100%;
        float: left;
    }
</style>


<br>
<div id="aling__center">
    <div class="cuadro">
        <div class="container">
            <div class="row">
                <div class="center">
                    <h4>Ingreso de datos personales</h4>
                    @if (session('mnsj'))
                    <div class="chip">
                        <img src="https://www.pngfind.com/pngs/m/25-256439_6-2-success-png-image-success-png-transparent.png" alt="Nota agregada">
                        {{ session('mnsj') }}
                        <i class="close material-icons">close</i>
                    </div>
                    <div class="chip" style="display: block;"><a href="{{ route('login') }}">Logueate</a></div>
                    @endif

                    @if ($errors->any())
                    <div>
                        <div class="divider"></div>
                        <h5><b>Revisa los campos:</b></h5>
                        <div class="divider"></div>
                        <br>
                        @include('errors')
                        <br>
                        <div class="divider"></div>
                    </div>
                    @endif

                </div>
                <br>

                <div class="divi"></div>
                <br>

                <form action=" {{ route('notas.crear') }} " method="POST">
                    @csrf
                    <div class="col s12">
                        <div class="center">
                            <label for="ID_empleado">Introduzca su ID de empleado:</label>
                            <input type="text" id="ID_empleado" name="ID_empleado">
                        </div>
                    </div>
                    <div class="col s6 ">
                        <div class="input-field">
                            <input id="email" type="email" value="{{ old('email')}}" name="email">
                            <label for="email">email</label>
                        </div>

                        <div class="input-field">
                            <input id="nombre" type="text" value="{{ old('nombre')}}" name="nombre">
                            <label for="nombre">Nombre</label>
                        </div>

                        <div class="input-field">
                            <input id="apellido" type="text" value="{{ old('apellido')}}" name="apellido">
                            <label for="apellido">apellido</label>
                        </div>
                        <div class="input-field">
                            <input id="telefono" type="text" value="{{ old('telefono')}}" name="telefono">
                            <label for="telefono">telefono</label>
                        </div>
                    </div>
                    <div class="col s6 push-s1">
                        <div class="input-field">
                            <input id="password" type="password" value="{{ old('password')}}" name="password">
                            <label for="password">password</label>
                        </div>
                        <div class="input-field">
                            <input id="direccion" type="text" value="{{ old('direccion')}}" name="direccion">
                            <label for="direccion">direccion</label>
                        </div>
                        <div class="input-field">
                            <input id="pago" type="text" value="{{ old('pago')}}" name="pago">
                            <label for="pago">pago_hora</label>
                        </div>

                        <select id="trabajo" class="browser-default" name="trabajo" value="{{ old('trabajo')}}">
                            <option value="" name="default" disabled selected>Escoje un proyecto</option>
                            <option value="trabajo1" name="trabajo1">Hilton Hotel</option>
                            <option value="trabajo2" name="trabajo2">Fairfax Hospital</option>
                            <option value="trabajo3" name="trabajo3">Amazon HQ</option>
                        </select>

                    </div>
                    <div>
                        <div class="divi">
                            <br>
                            <div class="center">
                                <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
</form>
<br>
<div class="divider"></div>
</div>
<script>
    var chip = {
        tag: 'chip content'
    };
</script>
@endsection