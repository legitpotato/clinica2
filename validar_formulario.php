<?php  
include("base/conexion.php");
session_start();
$rut = $_SESSION["Rut"];
$email = $_SESSION["Email"];
$fecha = date('l jS \of F Y h:i:s A');
$respuesta1 = $_POST["respuesta1"];
$respuesta2 = $_POST["respuesta2"];
$respuesta3 = $_POST["respuesta3"];
$respuesta4 = $_POST["respuesta4"];
$respuesta5 = $_POST["respuesta5"];
$respuesta6 = $_POST["respuesta6"];
$respuesta7 = $_POST["respuesta7"];
$respuesta8 = $_POST["respuesta8"];
$respuesta9 = $_POST["respuesta9"];
$respuesta10 = $_POST["respuesta10"];
$respuesta11 = $_POST["respuesta11"];
$respuesta12 = $_POST["respuesta12"];
$respuesta13 = $_POST["respuesta13"];
$respuesta14 = $_POST["respuesta14"];
$respuesta15 = $_POST["respuesta15"];
$respuesta16 = $_POST["respuesta16"];
$respuesta17 = $_POST["respuesta17"];
$respuesta18 = $_POST["respuesta18"];
$respuesta19 = $_POST["respuesta19"];
$respuesta20 = $_POST["respuesta20"];
$respuesta21 = $_POST["respuesta21"];
$respuesta22 = $_POST["respuesta22"];
$respuesta23 = $_POST["respuesta23"];
$respuesta24 = $_POST["respuesta24"];


$consulta = "INSERT INTO respuestas(Rut,Email,Fecha,pregunta1,pregunta2,pregunta3,pregunta4,pregunta5,pregunta6,pregunta7,pregunta8,pregunta9,pregunta10,pregunta11,pregunta12,pregunta13,pregunta14,pregunta15,pregunta16,pregunta17,pregunta18,pregunta19,pregunta20,pregunta21,pregunta22,pregunta23,pregunta24) VALUES ('$rut', '$email','$fecha', '$respuesta1', '$respuesta2', '$respuesta3', '$respuesta4', '$respuesta5', '$respuesta6', '$respuesta7', '$respuesta8', '$respuesta9', '$respuesta10', '$respuesta11', '$respuesta12', '$respuesta13', '$respuesta14', '$respuesta15', '$respuesta16', '$respuesta17', '$respuesta18', '$respuesta19', '$respuesta20', '$respuesta21', '$respuesta22', '$respuesta23', '$respuesta24' )";

$resultado = mysqli_query($conexion, $consulta);
if($resultado){
    $mensaje = "¡Formulario rellenado con éxito!";
        
    header("Location: formulario.php");
}
else{
    echo "Ha ocurrdio un error";
}


?>