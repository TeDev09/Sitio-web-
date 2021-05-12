<?php
session_start();
?>
<html lang="es">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>
    body {
        background-color: #d3d1d2;
    }

    #nav {
        margin: 0;
        padding: 0;
        width: 200px;
        background-color: #8f8f8f;
        position: fixed;
        height: 100%;
        overflow: auto;
    }

    #nav a {
        display: block;
        color: rgb(255, 255, 255);
        font-weight: bolder;
        font-size: 20px;
        padding: 20px;
        text-decoration: none;
    }

    #nav a.selected {
        background-color: rgb(15, 189, 20);
        color: rgb(255, 255, 255);
    }

    #nav a:hover:not(.selected) {
        background-color: white;
        color: #2f77e4;
    }

    div.content {
        margin-left: 210px;
        padding: 1px 16px;

    }

    @media screen and (max-width: 700px) {
        #nav {
            width: 100%;
            height: auto;
            position: relative;
        }

        #nav a {
            float: left;
        }

        div.content {
            margin-left: 0;
        }
    }
</style>
<title>sitio Web</title>
</head>

<body>
    <?php
    if (isset($_SESSION['idusu'])){
        $idusu = $_SESSION['idusu'];
    }
    use Carbon\Carbon;
    $hoy = Carbon::now('America/El_Salvador');
    // Carbon embed 822 languages:
    'Fecha y hora actual: ' . $hoy->locale('es')->isoFormat('dddd, MMMM Do YYYY, h:mm');
    $datetime = $hoy->toDateTimeString()
    ?>
    <div id="contenido">
        <div class="col s12">
            <div class="col s3">
                <div id="nav" class="sideBar" style="border-right: 1px solid white;">
                    @if (isset($_SESSION['usuario']) or isset($_SESSION['sup']) or isset($_SESSION['admin']))
                    <?php
                    if (isset($_SESSION['sup']) or isset($_SESSION['admin'])){ 
                    ?>
                    <a class="" href="{{ route('cierre.form') }}" data-aos="fade-down" data-aos-duration="300" data-aos-delay="200">Salir</a>
                    <div class="divider"></div>
                    <?php
                    }else{ 
                    ?>
                    <!-- Dropdown Trigger -->
                    <a class='dropdown-button' href='#' data-activates='dropdown1'>Tu cuenta</a>

                    <!-- Dropdown Structure -->
                    <ul id='dropdown1' class='dropdown-content'>
                        <li><a style="background-color: #b1b1b1">
                                <form action="{{ route('cierre.form') }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" value="<?php echo $idusu ?>" name="idusu">
                                    <input type="hidden" value="<?php echo $datetime ?>" name="datetime">
                                    <input style="color:black;" class="btn yellow" type="submit" name="enviar" value="salir">
                                </form>
                            </a></li>
                        <div class="divider"></div>
                    </ul>
                    <?php
                    }
                    ?>
                    @else
                    <a href="{{ route('login') }}" data-aos="fade-down" data-aos-duration="300" data-aos-delay="500">Entrar</a>
                    <div class="divider"></div>
                    @endif
                    <div class="divider"></div>
                    <a class="<?php if (isset($inicio)) {
                                    echo 'selected';
                                } ?>" href="#" data-aos="fade-down" data-aos-duration="300" data-aos-delay="100">Datos</a>
                    <div class="divider"></div>
                    <?php
                    if (isset($idusu)){ 
                    ?>
                    <a class="" href="{{ route('pagos', $idusu) }}" data-aos="fade-down" data-aos-duration="300" data-aos-delay="200">Pagos</a>
                    <div class="divider"></div>
                    <?php
                    }else{
                    ?>
                    <a class="" href="{{ route('pagos') }}" data-aos="fade-down" data-aos-duration="300" data-aos-delay="200">Pagos</a>
                    <div class="divider"></div>
                    <?php
                    }
                    ?>
                    </nav>
                </div>
            </div>
        </div>
        <div class="content">
            <?php
            if (isset($_SESSION['admin']) or isset($_SESSION['sup']) or isset($_SESSION['usuario'])) {
                if (isset($_SESSION['admin'])) {
            ?>
                    <div class="section">
                        <div class="row">
                            <div class="col s12">
                                <div style="background-color: #b1b1b1" class="col s12">
                                    <?php
                                    echo $_SESSION['admin'] . ' <---Indicador de rol';
                                    ?>
                                    <a href="{{ route('cierre') }}">Cerrar sesión</a>
                                    @yield('cuadro')
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (isset($_SESSION['sup'])) {
                ?>
                    <div class="section">
                        <div class="row">
                            <div class="col s12">
                                <div style="background-color: #b1b1b1" class="col s12">
                                    <?php
                                    echo $_SESSION['sup'] . ' <---Indicador de rol';
                                    ?>
                                    <a href="{{ route('cierre') }}">Cerrar sesión</a>
                                    @yield('cuadro')
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (isset($_SESSION['usuario'])) {
                ?>

                    <div class="section">
                        <div class="row">
                            <div class="col s12">
                                <div style="background-color: #b1b1b1" class="col s12">
                                <h1 class="center">No tienes los permisos para ver este contenido. Ve a "Pagos" para continuar</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php
                }
            } else {
                ?>
                <style>
                    .cuad {
                        background-color: #d3d1d2;
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
                                        <h4 style="display: inline-block;" class="left"><a href="{{ route('verificar') }}">LOGUEARSE</a></h4>
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
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
            $('.dropdown-button').dropdown('open');
            $('.dropdown-button').dropdown({
                inDuration: 700,
                outDuration: 400,
                constrainWidth: true, // Does not change width of dropdown to that of the activator
                hover: true, // Activate on hover
                belowOrigin: true, // Displays dropdown below the button

            });
        </script>
</body>

</html>