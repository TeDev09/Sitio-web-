<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$bd = 'sistemabd';
$conexion = mysqli_connect($host, $user, $pass, $bd);
if (isset($conexion)) {
    /* echo '<script>
alert("conexion exitosa");
</script>'; */
} else {
    echo '<script>
alert("ERROR al conectar");
</script>';
}
session_start();
?>
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
<title>pagos</title>
</head>

<body>

    <div class="section container">
        <div class="row">
                <?php
                if (isset($_SESSION['admin']) or isset($_SESSION['sup']) or isset($_SESSION['usuario'])) {
                    if (isset($_SESSION['admin']) or isset($_SESSION['sup'])) {
                        
                        ?>


                        <div class="col s6 push-s3 center">
                            <h3 class="center">Control de pago </h3>
                            <br>
                            <form action="{{ route('pagos') }}" method="GET">
                                <label for="idusu">Busca por ID de usuario</label>
                                <input  id="" type="text" name="idusu" required>
                                <input class="btn green" type="submit" value="Buscar" name="buscar">
                            </form>
                        </div>
                    

                        <div class="col s12">
                        <?php
                        if(isset($_GET['buscar'])){ 
                            if (!empty($_GET['idusu'])){ 
                            $id = $_GET['idusu'];
                            //echo 'buscaste la ID: '. $id. ' ';
                            ?>
                            <h5 class="center">Datos de pago de ID: <?php echo $id; ?></h5>
                            <?php
                            $comprobar = "SELECT * FROM usuarios WHERE id ='$id'";
                            $resultado1 = mysqli_query($conexion, $comprobar) or die('ERROR'); //se realiza el query
                                while ($registro2 = mysqli_fetch_array($resultado1)) {
                                    $hora_salida = $registro2['hora_salida'];
                                    $hora_entrada = $registro2['hora_entrada'];
                                    $pago_hora = $registro2['pago'];
                                }
                                $hora_salida1 = $hora_salida[11];
                                $hora_salida2 = $hora_salida[12];
                                $total_salida = $hora_salida1.$hora_salida2;

                                $hora_entrada1 = $hora_entrada[11];
                                $hora_entrada2 = $hora_entrada[12];
                                $total_entrada = $hora_entrada1.$hora_entrada2;

                                $resta= $total_salida - $total_entrada;

                                $total = $resta * $pago_hora;
                                //echo ' a pagar '. $suma .'';
                                
                                ?>
                                <div>
                                <div class="col s4">
                                <h5 class="center">Hora de Entrada:</h5>
                                <div class="divi"></div>
                                <br>
                                <h6 class="center"><b> <?php if(empty($hora_entrada)){ echo "Debes iniciar sesión para tomar tu hora de entrada. Puedes iniciar sesión" ?> <a href="{{ route('verificar') }}">aquí</a> <?php ; }else{ echo $hora_entrada; } ?> </b></h6>
                                </div>
                            </div>
                            <div>
                                <div class="col s2 push-s1">
                                <h5 class="center">Trabajadas:</h5>
                                <div class="divi"></div>
                                <br>
                                <h6 class="center"><b> <?php if(empty($resta)){ echo "Error al procesar." ; }else{ echo $resta.' Horas en total'; } ?> </b></h6>
                                <h5 class="center">Pago:</h5>
                                <div class="divi"></div>
                                <br>
                                <h6 class="center"><b> <?php if(empty($total)){ echo "Error al procesar." ; }else{ echo '$'.$total.' A pagar'; } ?> </b></h6>
                                </div>
                            </div>
                            <div>
                                <div class="col s4 push-s2">
                                <h5 class="center">Hora de Salida:</h5>
                                <div class="divi"></div>
                                <br>
                                <h6 class="center"><b> <?php if(empty($hora_salida)){ echo "Debes cerrar sesión para tomar tu hora de salida." ; }else{ echo $hora_salida; } ?> </b></h6>
                                </div>
                            </div>
                                <?php
                            }
                        }
                    }
                    if (isset($_SESSION['usuario'])) {
                            if (isset($idusu) && !empty($idusu)) {
                        ?>
                            <h3 class="center">Usuario ID: <?php echo $idusu ?>, tus horas de entrada/salida son:</h3>
                            <h6 class="center">Un administrador te notificará de tu paga con forme a estos datos. Si no tienes hora de salida debes volver a la página inicial y cerrar sesión (Al cerrar sesión se toma tu hora de salida automáticamente).</h6>
                        <?php
                        $comprobar = "SELECT * FROM usuarios WHERE id ='$idusu'";
                        $resultado1 = mysqli_query($conexion, $comprobar) or die('ERROR'); //se realiza el query
                        while ($registro2 = mysqli_fetch_array($resultado1)) {
                            $hora_salida = $registro2['hora_salida'];
                            $hora_entrada = $registro2['hora_entrada'];
                        }
                        //echo $hora_salida;
                        //echo'<br>';
                        //echo $hora_entrada;
                        ?>
                            <div>
                                <div class="col s5">
                                <h5 class="center">Hora de Entrada:</h5>
                                <div class="divi"></div>
                                <br>
                                <h6 class="center"><b> <?php if(empty($hora_entrada)){ echo "Debes iniciar sesión para tomar tu hora de entrada. Puedes iniciar sesión" ?> <a href="{{ route('verificar') }}">aquí</a> <?php ; }else{ echo $hora_entrada; } ?> </b></h6>
                                </div>
                            </div>
                            <div>
                                <div class="col s5 push-s2">
                                <h5 class="center">Hora de Salida:</h5>
                                <div class="divi"></div>
                                <br>
                                <h6 class="center"><b> <?php if(empty($hora_salida)){ echo "Debes cerrar sesión para tomar tu hora de salida." ; }else{ echo $hora_salida; } ?> </b></h6>
                                </div>
                            </div> 
                        <?php
                            }else{ 
                        ?>
                        <h3 class="center">Debes estar <a href="{{ route('verificar') }}">Logueado</a> para ver este contenido.</h3>
                        <?php
                            }
                    }
                }
                ?>
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