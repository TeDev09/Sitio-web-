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
                    <h4>Inicia sesión</h4>
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


                <div class="col s12 ">
                    <form action=" {{ route('login.usuario') }} " method="POST">
                        @csrf
                        <div class="input-field">
                            <input id="email" type="email" value="{{ old('email')}}" name="email">
                            <label for="email">email</label>
                        </div>
                </div>
                <div class="col s12">
                <div class="input-field">
                            <input id="password" type="password" value="{{ old('password')}}" name="password">
                            <label for="password">password</label>
                        </div>
                </div>
                <br>
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