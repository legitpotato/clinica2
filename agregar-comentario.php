<?php 
 
  include("base/conexion.php");
  
  $nombre     = $_POST["nombre"];
  $rut        = $_POST["rut"];
  $email      = $_POST["email"];
  $comentario = $_POST["comentario"];

  $consulta = "INSERT INTO comentarios(Nombre, Rut, Email, Comentario) VALUES ('$nombre', '$rut', '$email', '$comentario')";

  $resultado = mysqli_query($conexion, $consulta);

  if($resultado){
      echo "Comentario agregado";
        header('Location: comentarios.php' );
        exit();
  }

?>