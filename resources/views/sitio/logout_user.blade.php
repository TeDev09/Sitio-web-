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
    <title></title>
</head>
<body>

    <div class="section container">
        <div class="row">
            <div class="col s12">
<?php
    session_start();
if (isset($_SESSION['usuario']) or isset($_SESSION['sup']) or isset($_SESSION['admin'])){ 
    session_destroy();
    ?>
    <div class="center">
        <h2>Has cerrado sesión</h2>
        <h5>Vuelve a loguarte para entrar al sitio</h5>
        <a href="{{ route('verificar') }}">Loguearse</a>
    </div>
    <?php
    
}else{ 
    ?>
    <div class="center">
        <h2>Tu sesión no existe</h2>
        <h5>Logueate para entrar al sitio</h5>
        <a href="{{ route('verificar') }}">Loguearse</a>
    </div>
    <?php
    
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