<?php
if (!isset($_SESSION['usuario'])){ 
    session_start();
    session_destroy();
    ?>
    
    <a href="{{ route('login') }}">ir</a>
    <?php
    
}else{ 
    echo 'ctm';
}
?>