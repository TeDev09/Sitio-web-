<html lang="es">
<meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>

</style>
    <title></title>
</head>
<body>

    <div class="section container">
        <div class="row">
            <div class="col s12">
<?php
if (!isset($_SESSION['usuario'])){ 
    session_start();
    session_destroy();
    ?>
    <div class="center">
        <h2>Has cerrado sesión como Usuario</h2>
        <h5>Vuelve a loguarte para entrar al sitio</h5>
        <a href="{{ route('login') }}">Loguearse</a>
    </div>
    <?php
    
}else{ 
    echo 'ctm';
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