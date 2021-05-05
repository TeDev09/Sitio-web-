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
        width: 500px;

        border-radius: 30px 30px 30px 30px;
    }

    .divi {
        border-top: 6px solid rgb(0, 0, 0);
        width: 100%;
        float: left;
    }
</style>
    <title>Paso1</title>
</head>
<body>

<div class="cuadro">
        <div class="section container">
            <div class="row">
                <div>
                <div class="center">
                        <h4>Validación Completada</h4>
                        <div class="divi"></div>
                        <br>
                        <div class="chip">
                            <img src="https://www.pngfind.com/pngs/m/25-256439_6-2-success-png-image-success-png-transparent.png" alt="Nota agregada">
                            Paso 1 completado
                            <?php
                            session_start();
                            $_SESSION['idusu']= $id;
                            ?>
                        </div>
                        <br>
                        <div class="divider"></div>
                        <br>
                        <a style="display: block;" href="{{ route('fecha') }}" class="waves-effect waves-light btn green">SIGUIENTE</a>
                    </div>
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