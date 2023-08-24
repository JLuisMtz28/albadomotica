<?php
session_start(); // Iniciar la sesión

include("../../conexion.php");
include("correos/enviarcorreo.php");
$con=conectar();

// Tomar los datos del formulario
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$comments = $_POST["comments"];
$rol = $_SESSION["rol"];

//Asignamos el valor del rol
if (!isset($_SESSION)) {
    $rol = 1;
}

// Agregar los datos a una base de datos o hacer cualquier otra cosa con ellos
// ...

$query = "INSERT INTO `contacto`(`nombre`, `correo`, `celular`, `comentarios`, `fecha`, `rol`) VALUES ('$name','$email','$phone','$comments',NOW(), '$rol')";

if (mysqli_query($con, $query)) {
    echo "<script>  
    history.back();
    alert('Se enviaron los datos');
    </script>";

} else {
    //Si la consulta no se logro completar, se nos mostrara un mensaje de error
    echo "Error: " . mysqli_error($con);
}
?>