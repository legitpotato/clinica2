<?php

if(!isset($_SESSION)) {
    session_start(); 
}

$mysqli = new mysqli('bft4tkk8rm2x28aipdxo-mysql.services.clever-cloud.com', 'uk6jrnxz2lrw4i6m', '6WsyDL5ctp48vTUH6up9', 'bft4tkk8rm2x28aipdxo') or die(mysqli_error($mysqli));

$codigo = 0;
$update = false;

$ID = '';
$Rut = '';
$Comentario = '';

if (isset($_GET['borrar'])) {
    $codigo = $_GET['borrar'];

    $mysqli->query("DELETE FROM comentarios WHERE ID=$codigo;") or die($mysqli->error());

    $_SESSION['mensaje'] = "¡Comentario borrado correctamente!";
    $_SESSION['msj_tipo'] = "danger";

    header("location: comentarios_admin.php");
    exit();
}