<html lang="es">
<meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>
body{
    background-color: #5d5d5d;
}
body header{
    background-color: #000000;
    color: white;
    width: 100%;
    height: 100px;
}
.botones{
    padding-top: 30px;
}
</style>
    <title>Pruebas</title>
</head>
<body>
    <!-- <header>
            <div class="botones">
                <a data-aos="fade-down" data-aos-duration="2000" id="blog" class="btn btn-primary" href=" {{ route('home') }} ">Mi blog <i class="material-icons">person</i></a>
                <a data-aos="fade-down" data-aos-duration="2000" id="inicio" class="btn btn-primary" href="{{ route('principal') }}">Inicio <i class="material-icons">home</i></a>
                <a data-aos="fade-down" data-aos-duration="2000" id="nosotros" class="btn btn-primary" href="{{ route('about') }}">nosotros <i class="material-icons">person</i></a>
                <a data-aos="fade-down" data-aos-duration="2000" id="notas" class="btn btn-primary" href="{{ route('notas') }}">Notas <i class="material-icons">book</i></a>
            </div>
    </header> -->
    <nav>
    <div class="nav-wrapper green">
      <a href="#" class="brand-logo">Pruebas</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a data-aos="fade-down" data-aos-duration="2000" id="blog"  href=" {{ route('home') }} ">Mi blog</a></li>
        <li><a data-aos="fade-down" data-aos-duration="2000" id="inicio"  href="{{ route('principal') }}">Inicio</a></li>
        <li><a data-aos="fade-down" data-aos-duration="2000" id="nosotros"  href="{{ route('about') }}">nosotros</a></li>
        <li><a data-aos="fade-down" data-aos-duration="2000" id="notas"  href="{{ route('notas') }}">Notas</a></li>
      </ul>
    </div>
  </nav>
    <!-- <div class="section container">
        <div class="row"> -->
            
                @yield('contenido')
            
        <!-- </div>
    </div> -->

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init();
</script>
</body>
</html>