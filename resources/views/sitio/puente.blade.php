<?php

use Illuminate\Support\Facades\Redirect;

session_start();
?>
@if ($_SESSION['usuario'])
    <?php
    echo 'Redireccionando...';
    $_SESSION['usuariofinal'] = $_SESSION['usuario'];
    route('principal');
    ?>
    @else
    <?php
    header("location:inicio.php");
    ?>
@endif
