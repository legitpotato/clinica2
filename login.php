<?php
include_once "base/conexion.php";

$user = $_POST["username"];
$pass = $_POST["password"];
session_start();
$_SESSION["username"] = $user;

$query = "SELECT * FROM prueba WHERE user = '$user' AND pass = '$pass' ";
$resultado = mysqli_query($conexion,$query);

$filas = mysqli_num_rows($resultado);


if($filas){
    
    header("location: form.php");
}else{
    include("index.php");
    ?>
    
    <h3>Error en la autentificacion</h3>
    <?php
}
?>

