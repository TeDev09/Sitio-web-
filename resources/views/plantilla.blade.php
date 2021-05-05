<?php session_start(); ?>
<html lang="es">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>
    body {
        background-color: #5d5d5d;
    }

    body header {
        background-color: #000000;
        color: white;
        width: 100%;
        height: 100px;
    }

    .botones {
        padding-top: 30px;
    }
</style>
<title>Pruebas</title>
</head>

<body>










    <?php
    if (isset($_SESSION['admin']) or isset($_SESSION['sup']) or isset($_SESSION['usuario'])) {
        if (isset($_SESSION['admin'])) {
    ?>
            <div class="section container">
                <div class="row">
                    <?php
                    echo $_SESSION['admin'] . ' <---Indicador de rol';
                    ?>
                    @yield('contenido')

                </div>
            </div>
        <?php
        }
        if (isset($_SESSION['sup'])) {
        ?>
            <div class="section container">
                <div class="row">
                    <?php
                    echo $_SESSION['admin'] . ' <---Indicador de rol';
                    ?>
                    @yield('contenido')

                </div>
            </div>
        <?php
        }
        if (isset($_SESSION['usuario'])) {
        ?>

            <h1 class="center">No tienes los permisos para ver este contenido.</h1>

        <?php
        }
    } else {
        ?>
        <style>
            .cuad {
                display: flex;
                justify-content: center;
                align-items: center;
                padding-top: 150px;
            }

            .cuadro {
                background-color: white;
                border: 2px solid white;
                width: auto;
                border-radius: 30px 30px 30px 30px;
            }

            .divi {
                border-top: 6px solid rgb(0, 0, 0);
                width: 100%;
                float: left;
            }
        </style>
        <div class="cuad">
            <div class="cuadro">
                <div class="section container">
                    <div class="row">
                        <div>
                            <p>
                            <div class="center">
                                <h3 class="center">DEBES ESTAR LOGUEADO PARA VISUALIZAR ESTE CONTENIDO</h3>
                                <div class="divider"></div>
                                <h4 style="display: inline-block;" class="left"><a href="{{ route('login') }}">LOGUEARSE</a></h4>
                                <h4 style="display: inline-block;" class="center"><a href="{{ route('admin') }}">Admin</a></h4>
                                <h4 style="display: inline-block;" class="right"><a href="{{ route('notas') }}">CREAR CUENTA</a></h4>
                            </div>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    #echo 'Debes estar logueado';
    ?>























    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>