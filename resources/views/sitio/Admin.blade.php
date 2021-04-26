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
                    @if ($errors->any())
                    <div>
                        <div class="divider"></div>
                        <h5><b>Error:</b></h5>
                        <div class="divider"></div>
                        <br>
                        @error('passAdm')
                        <div class="chip">
                            <img src="https://th.bing.com/th/id/Rb6a4397743db63db457d6b1007091831?rik=M6kIZwl1oAU4iw&riu=http%3a%2f%2fst2.depositphotos.com%2f1454412%2f5924%2fi%2f950%2fdepositphotos_59246743-stock-photo-big-red-x-button.jpg&ehk=r7ItdEubX8ubwY%2bW08hfrxAZRnR3HNcHgZvgtfFhkzU%3d&risl=&pid=ImgRaw" alt="Error">
                        {{$message}}
                        </div>
                        @enderror
                        @error('passSup')
                        <div class="chip">
                            <img src="https://th.bing.com/th/id/Rb6a4397743db63db457d6b1007091831?rik=M6kIZwl1oAU4iw&riu=http%3a%2f%2fst2.depositphotos.com%2f1454412%2f5924%2fi%2f950%2fdepositphotos_59246743-stock-photo-big-red-x-button.jpg&ehk=r7ItdEubX8ubwY%2bW08hfrxAZRnR3HNcHgZvgtfFhkzU%3d&risl=&pid=ImgRaw" alt="Error">
                        {{$message}}
                        </div>
                        @enderror
                        @error('campos')
                        <div class="chip">
                            <img src="https://th.bing.com/th/id/Rb6a4397743db63db457d6b1007091831?rik=M6kIZwl1oAU4iw&riu=http%3a%2f%2fst2.depositphotos.com%2f1454412%2f5924%2fi%2f950%2fdepositphotos_59246743-stock-photo-big-red-x-button.jpg&ehk=r7ItdEubX8ubwY%2bW08hfrxAZRnR3HNcHgZvgtfFhkzU%3d&risl=&pid=ImgRaw" alt="Error">
                        {{$message}}
                        </div>
                        @enderror
                        <br>
                        <div class="divider"></div>
                    </div>
                    @endif
                    <h4>Inicia como supervisor</h4>
                    @if (session('mnsj'))
                    <div class="chip">
                        <img src="https://www.pngfind.com/pngs/m/25-256439_6-2-success-png-image-success-png-transparent.png" alt="Nota agregada">
                        {{ session('mnsj') }}
                        <i class="close material-icons">close</i>
                    </div>
                    <div class="chip" style="display: block;"><a href="{{ route('login') }}">Logueate</a></div>
                    @endif
                </div>
                <br>
                <div class="divi"></div>
                <br>
                <form action=" {{ route('admin.form') }} " method="POST">
                    @csrf

                    <div class="col s12">
                        <div class="input-field">
                            <input id="password" type="password" name="password_supervisor">
                            <label for="password">Contraseña</label>
                        </div>
                    </div>
                    <div>
                        <div class="divi">
                            <br>
                            <div class="center">
                                <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                                    <i class="material-icons right">send</i>
                                </button>

                            </div>
                            <div class="row">
                                <div class="center">
                                    <h4>Inicia como Admin</h4>
                                    @if (session('mnsj'))
                                    <div class="chip">
                                        <img src="https://www.pngfind.com/pngs/m/25-256439_6-2-success-png-image-success-png-transparent.png" alt="Nota agregada">
                                        {{ session('mnsj') }}
                                        <i class="close material-icons">close</i>
                                    </div>
                                    <div class="chip" style="display: block;"><a href="{{ route('login') }}">Logueate</a></div>
                                    @endif
                                </div>
                                <br>
                                <div class="divi"></div>
                                <br>
                                <div class="col s12">
                                    <div class="input-field">
                                        <input id="password" type="password" name="password_admin">
                                        <label for="password">Contraseña</label>
                                    </div>
                                </div>
                                <div>
                                    <div class="divi">
                                        <br>
                                        <div class="center">
                                            <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                                                <i class="material-icons right">send</i>
                                            </button>
                </form>

            </div>
        </div>
    </div>
</div>

</div>
<br>
<div class="divider"></div>

<script>
    var chip = {
        tag: 'chip content'
    };
</script>
@endsection