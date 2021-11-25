<?php  
  include("base/conexion.php");
  
  $nombres   = $_POST['Nombres'];
  $apellidos = $_POST['Apellidos'];
  $ciudad    = $_POST['Ciudad'];
  $telefono  = $_POST['Telefono'];
  $edad      = $_POST['Edad'];
  $email     = $_POST['Email'];
  $rut       = $_POST['Rut'];
  $genero    = $_POST['optradio1'];
  $pass = $_POST['Pass1'];


    $consulta = "INSERT INTO usuarios(Nombres,Apellidos,Ciudad,Telefono,Edad,Email,Rut, Genero, Contraseña) VALUES ('$nombres', '$apellidos','$ciudad', '$telefono', '$edad', '$email', '$rut', '$genero', '$pass' )";

    $resultado = mysqli_query($conexion, $consulta);
    if($resultado){
        $mensaje = "Usuario creado correctamente";
        
        header("Location: ingresar.php");
    }else{
        echo "Ha ocurrdio un error";
    }


?>