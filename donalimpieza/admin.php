

<?php

session_start();

$sesion=$_SESSION['usuario']['nombre'];


 echo ("ola admin  $sesion");
 
 ?>

<a href="salir.php">Salir</a>