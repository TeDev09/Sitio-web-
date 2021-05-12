<html lang="es">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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

    .divi {
        border-top: 6px solid rgb(0, 0, 0);
        width: 100%;
        float: left;
    }
</style>
<title>Validanción paso 1</title>
</head>

<body>
    <div class="section">
        <div class="cuadro">
            <div class="row">
                <div class="col s12">
                    <?php

                    use Carbon\Carbon;

                    $hoy = Carbon::now('America/El_Salvador');
                    // Carbon embed 822 languages:
                    echo 'Fecha y hora actual: '.$hoy->locale('es')->isoFormat('dddd, MMMM Do YYYY, h:mm');
                    $datetime = $hoy->toDateTimeString()
                    ?>
                    <form action="{{ route('valID') }}" method="POST">
                    @csrf
                    <input type="hidden" value="<?php echo $datetime ?>" name="datetime">
                        <div class="col s12">
                            <h3 class="center">Datos de entrada</h3>
                            @if ($errors->any())
                            @error('query1')
                            <div class="center">
                                <div class="chip">
                                <img src="https://th.bing.com/th/id/Rb6a4397743db63db457d6b1007091831?rik=M6kIZwl1oAU4iw&riu=http%3a%2f%2fst2.depositphotos.com%2f1454412%2f5924%2fi%2f950%2fdepositphotos_59246743-stock-photo-big-red-x-button.jpg&ehk=r7ItdEubX8ubwY%2bW08hfrxAZRnR3HNcHgZvgtfFhkzU%3d&risl=&pid=ImgRaw" alt="Error">
                                    {{ $message }}
                                    </div>
                            </div>
                            @enderror
                            @endif
                            <div class="divi"></div>
                            <p>ㅤ</p>
                            <div class="col s12">
                                <div class="center">
                                    <label for="ID_empleado">Introduzca su ID de empleado:</label>
                                    <input type="text" id="ID_empleado" name="ID_empleado" class="validate" minlength="5">
                                </div>
                                <small class="center"><b>¿No tienes ID de empleado? Crea una cuenta <a href="{{ route('notas') }}">aquí</a> </b></small>
                            </div>
                            <p>ㅤ</p>
                            <div class="divi"></div>
                        </div>
                        <p>ㅤ</p>
                        <div class="center"><input type="submit" value="Enviar"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>