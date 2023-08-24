<?php
function conectar(){

    $host="localhost";
    $user="luukcomm_envelope_Milton";
    $pass="=Envelope.220";
    $bd="";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>
