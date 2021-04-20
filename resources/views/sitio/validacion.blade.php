
    <html lang="es">
    <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
    
    </style>
        <title>ostia</title>
    </head>
    <body>
    
        <div class="section container">
            <div class="row">
                <div class="col s12">
                <div>
                <p>	
                @if ($usuario_dem)
                    <?php
                    session_start();
                    echo $usuario_dem;
                    $_SESSION['usuario']=$usuario_dem;
                    ?>
                    <a href="{{ route('principal') }}">aaaaaaaaa</a>
                    <?php
                    ?>
                @else
                    
                @endif
                </p></div>
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
    
    