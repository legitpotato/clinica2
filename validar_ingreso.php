<?php

session_start();
include("base/conexion.php");

$rut = $_POST['Rut'];
$pass = $_POST['Pass'];

$consulta = "SELECT * FROM usuarios WHERE Rut = '$rut' AND Contraseña = '$pass' ";
$consulta_nombre = "SELECT Nombres FROM `usuarios` WHERE Rut = '$rut' ";
$consulta_apellido = "SELECT Apellidos FROM `usuarios` WHERE Rut = '$rut' ";
$consulta_ciudad = "SELECT Ciudad FROM `usuarios` WHERE Rut = '$rut' ";
$consulta_telefono = "SELECT Telefono FROM `usuarios` WHERE Rut = '$rut' ";
$consulta_edad = "SELECT Edad FROM `usuarios` WHERE Rut = '$rut' ";
$consulta_email = "SELECT Email FROM `usuarios` WHERE Rut = '$rut' ";
$consulta_genero = "SELECT Genero FROM `usuarios` WHERE Rut = '$rut' ";
$consulta_pass = "SELECT Contraseña FROM `usuarios` WHERE Rut = '$rut' ";


$resultado = mysqli_query($conexion,$consulta_nombre);
$resultado2 = mysqli_query($conexion,$consulta_apellido);
$resultado3 = mysqli_query($conexion,$consulta_ciudad);
$resultado4 = mysqli_query($conexion,$consulta_telefono);
$resultado5 = mysqli_query($conexion,$consulta_edad);
$resultado6 = mysqli_query($conexion,$consulta_email);
$resultado7 = mysqli_query($conexion,$consulta_genero);
$resultado8 = mysqli_query($conexion,$consulta_pass);
$filas = mysqli_num_rows($resultado);
$filas2 = mysqli_num_rows($resultado2);
$filas3 = mysqli_num_rows($resultado3);
$filas4 = mysqli_num_rows($resultado4);
$filas5 = mysqli_num_rows($resultado5);
$filas6 = mysqli_num_rows($resultado6);
$filas7 = mysqli_num_rows($resultado7);
$filas8 = mysqli_num_rows($resultado8);
$fila = mysqli_fetch_array($resultado);
$fila2 = mysqli_fetch_array($resultado2);
$fila3 = mysqli_fetch_array($resultado3);
$fila4 = mysqli_fetch_array($resultado4);
$fila5 = mysqli_fetch_array($resultado5);
$fila6 = mysqli_fetch_array($resultado6);
$fila7 = mysqli_fetch_array($resultado7);
$fila8 = mysqli_fetch_array($resultado8);
//FILA TIENE EL NOMBRE DE LA PERSONA EXTRAIDO DE LA BBDD, PORQUE INICIA SESION CON EL RUT.
$user = $fila["Nombres"];
$user2 = $fila2["Apellidos"];
$user3 = $fila3["Ciudad"];
$user4 = $fila4["Telefono"];
$user5 = $fila5["Edad"];
$user6 = $fila6["Email"];
$user7 = $fila7["Genero"];
$user8 = $fila8["Contraseña"];

$_SESSION["Nombres"] = $user;
$_SESSION["Email"] = $user6;
$_SESSION["Apellidos"] = $user2;
$_SESSION["Ciudad"] = $user3;
$_SESSION["Telefono"] = $user4;
$_SESSION["Edad"] = $user5;
$_SESSION["Genero"] = $user7;
$_SESSION["Contraseña"] = $user8;

if($fila){
    $_SESSION["Rut"] = $rut;
    header("location: index.php");

}else{
    include("ingresar.php");
    ?>

    <h4>Error en la autentificación</h4>

    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>