<html lang="es">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>
    .main {
        padding-top: 250px;
    }
    body {
        background-color: #d3d1d2;
    }
    nav {
                margin: 0;
                padding: 0;
                width: 200px;
                background-color: #8f8f8f;
                position: fixed;
                height: 100%;
                overflow: auto;
            }
            nav a {
                display: block;
                color: rgb(255, 255, 255);
                font-weight: bolder;
                font-size: 20px;
                padding: 5px;
                text-decoration: none;
            }
            nav a.selected {
                background-color: rgb(15, 189, 20);
                color: rgb(255, 255, 255);
            }
            nav a:hover:not(.selected) {
                background-color: white;
                color: #2f77e4;
            }
            div.content {
                margin-left: 210px;
                padding: 1px 16px;
                height: 1000px;
            }
            @media screen and (max-width: 700px) {
                nav {
                    width: 100%;
                    height: auto;
                    position: relative;
                }
                nav a {
                    float: left;
                }
                div.content {
                    margin-left: 0;
                }
            }
</style>
<title></title>
</head>

<body>
    <div class="center main" id="circulo">
        <div class="preloader-wrapper big active">
            <div class="spinner-layer spinner-blue-only">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="hide" id="contenido">
    <div class="col s12">
        <div class="col s3">
                <nav class="sideBar" style="border-right: 1px solid white;">
                    <a href="#">Tu cuenta</a>
                    <div class="divider"></div>
                    <a href="#">Inicio</a>
                    <div class="divider"></div>
                    <a class="selected" href="#">Datos</a>
                    <div class="divider"></div>
                    <a href="#">Administración</a>
                    <div class="divider"></div>
                    <a href="#">Cuentas</a>
                    <div class="divider"></div>
                    <a href="#">Efectivo</a>
                    <div class="divider"></div>
                </nav>
            </div>
    </div>
        
        <div class="content">
            <div class="section">
                <div class="row">
                    <div class="col s12">
                    
                    <div style="background-color: #4f53ff" class="col s12">
                        @yield('cuadro')
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
        window.addEventListener('load', () => {
            setTimeout(carga, 1000);

            function carga() {
                document.getElementById('circulo').className = 'hide';
                document.getElementById('contenido').className = 'center';
            }
        })
    </script>
</body>

</html>