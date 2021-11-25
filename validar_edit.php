<?php

    include_once("base/conexion.php");
    session_start();
    
    if(isset($_POST['Nombres'])){
        $nombres   = $_POST['Nombres'];
    }
    if($_POST['Nombres'] == ""){
        $nombres = $_SESSION["Nombres"];
    }

    if(isset($_POST['Apellidos'])){
        $apellidos = $_POST['Apellidos'];
    }
    if($_POST['Apellidos'] == ""){
        $apellidos = $_SESSION["Apellidos"];
    }

    if(isset($_POST['Ciudad'])){
        $ciudad    = $_POST['Ciudad'];
    }
    if($_POST['Ciudad'] == ""){
        $ciudad = $_SESSION["Ciudad"];
    }

    if(isset($_POST['Telefono'])){
        $telefono    = $_POST['Telefono'];
    }
    if($_POST['Telefono'] == ""){
        $telefono = $_SESSION["Telefono"];
    }

    if(isset($_POST['Edad'])){
        $edad    = $_POST['Edad'];
    }
    if($_POST['Edad'] == 0){
        $edad = $_SESSION["Edad"];
    }

    if(isset($_POST['Email'])){
        $email    = $_POST['Email'];
    }
    if($_POST['Email'] == ""){
        $email = $_SESSION["Email"];
    }

    if(isset($_POST['Rut'])){
        $rut    = $_POST['Rut'];
    }
    if($_POST['Rut'] == 0){
        $rut = $_SESSION['Rut'];
    }

    if(isset($_POST['optradio1'])){
        $genero    = $_POST['optradio1'];
    }
    if($_POST['optradio1'] == ""){
        $genero = $_SESSION['Genero'];
    }

    if(isset($_POST['Pass1'])){
        $pass    = $_POST['Pass1'];
    }
    if($_POST['Pass1'] == ""){
        $pass = $_SESSION['Pass1'];
    }

    $elrut = $_SESSION["Rut"];

    $query = " UPDATE usuarios SET Nombres='$nombres', Apellidos='$apellidos', Ciudad='$ciudad', Telefono='$telefono', Edad='$edad', Email='$email', Rut='$rut', Genero='$genero', Contraseña='$pass' WHERE Rut = $elrut ;";
    $query2 = "UPDATE usuarios \n"

    . "SET Nombres =\"$nombres\",\n"
    . "Apellidos   =\"$apellidos\"\n"
    . "Ciudad      =\"$ciudad\"\n"
    . "Telefono    =\"$edad\"\n"
    . "Edad        =\"$email\"\n"
    . "Contraseña   =\"$pass\"\n"
    . "\n"
    . "WHERE Rut=$rut";

  
    $resultado = mysqli_query($conexion, $query);
    if($resultado){
        header("Location: index.php");
    }else{
        echo "Ha ocurrdio un error";
    }

?>