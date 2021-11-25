<?php include("base/conexion.php") ?>
<!DOCTYPE html>

<html lang="es">
<head>
<title>Comentarios</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">

<?php include("header.php"); ?>

<div class="wrapper bgded overlay gradient" style="background-image:url('../images/demo/backgrounds/01.png');">
  <div id="breadcrumb" class="hoc clear"> 
    <h6 class="heading"></h6>
    <ul>
      <li><a href="index.php">Inicio</a></li>
      <li><a href="respuestas.php">Respuestas</a></li>
    </ul>
  </div>
</div>

<?php

if (isset($_GET['ver'])) {
    
    $mysqli = new mysqli('bft4tkk8rm2x28aipdxo-mysql.services.clever-cloud.com', 'uk6jrnxz2lrw4i6m', '6WsyDL5ctp48vTUH6up9', 'bft4tkk8rm2x28aipdxo') or die(mysqli_error($mysqli));
    $update = false;
    $codig = $_GET['ver'];
    $result = $mysqli->query("SELECT * FROM respuestas WHERE ID='$codig;'");

    $update = true;
    $row_cnt = mysqli_num_rows($result);
    
    if ($row_cnt == 1) {
        $row = $result->fetch_array();
        $codigo = $row['ID'];
        $fecha = $row['Fecha'];
        $Rut = $row['Rut'];
        $Email = $row['Email'];
        $respuesta1 = $row['pregunta1'];
        $respuesta2 = $row['pregunta2'];
        $respuesta3 = $row['pregunta3'];
        $respuesta4 = $row['pregunta4'];
        $respuesta5 = $row['pregunta5'];
        $respuesta6 = $row['pregunta6'];
        $respuesta7 = $row['pregunta7'];
        $respuesta8 = $row['pregunta8'];
        $respuesta9 = $row['pregunta9'];
        $respuesta10 = $row['pregunta10'];
        $respuesta11 = $row['pregunta11'];
        $respuesta12 = $row['pregunta12'];
        $respuesta13 = $row['pregunta13'];
        $respuesta14 = $row['pregunta14'];
        $respuesta15 = $row['pregunta15'];
        $respuesta16 = $row['pregunta16'];
        $respuesta17 = $row['pregunta17'];
        $respuesta18 = $row['pregunta18'];
        $respuesta19 = $row['pregunta19'];
        $respuesta20 = $row['pregunta20'];
        $respuesta21 = $row['pregunta21'];
        $respuesta22 = $row['pregunta22'];
        $respuesta23 = $row['pregunta23'];
        $respuesta24 = $row['pregunta24'];
    }
    $array = [$respuesta1, $respuesta2, $respuesta3, $respuesta4, $respuesta5, $respuesta6, $respuesta7, $respuesta8, $respuesta9, $respuesta10, $respuesta11, $respuesta12, $respuesta13, $respuesta14, $respuesta15, $respuesta16, $respuesta17, $respuesta18, $respuesta19, $respuesta20, $respuesta21, $respuesta22, $respuesta23, $respuesta24];
    for($i = 0; $i <= 23; $i++) {
        if($array[$i] == "opcion1"){
            $array[$i] = "Si";
        }
        if($array[$i] == "opcion2"){
            $array[$i] = "No";
        }
        if($array[$i] == "opcion3"){
            $array[$i] = "Prefiero no responder";
        }
        if($array[1] == "Prefiero no responder"){
            $array[1] = "No se";
        }
        if($array[2] == "Prefiero no responder"){
            $array[2] = "No se";
        }
        if($array[11] == "Prefiero no responder"){
            $array[11] = "No se";
        }
    }
}

?>

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <div class="content"> 
    	<div id="comments">
        <h2>Respuestas: </h2>
        <br><br>
		<table class="table table-striped table-bordered table-condensed">
			<thead>
			<tr>
            <th scope="row">1. ¿Tienes entre 18 y 60 años?</th>
			<th scope="row">2. ¿Pesas más de 50 kilos y tienes un IMC >= 20?</th>
			<th scope="row">3. ¿Has dormido las horas habituales?</th>
			<th scope="row">4. ¿Has comido en las últimas 5 horas? (desayuno y/o almuerzo)</th>
            <th scope="row">5. ¿Has consumido alcohol en las últimas 12 horas previas a donar?</th>
            <th scope="row">6. ¿Has consumido marihuana en las últimas 24 horas previas a donar?</th>
            <th scope="row">7. ¿Tienes hipertensión controlada?</th>
            <th scope="row">8. ¿Tiene heridas en la boca o lesiones en la zona de punción?</th>
			</tr>
			</thead>
			<tbody>
            <tr>
            <td scope="col"><?php echo $array[0] ?></td>
            <td scope="col"><?php echo $array[1] ?></td>
            <td scope="col"><?php echo $array[2] ?></td>
            <td scope="col"><?php echo $array[3] ?></td>
            <td scope="col"><?php echo $array[4] ?></td>
            <td scope="col"><?php echo $array[5] ?></td>
            <td scope="col"><?php echo $array[6] ?></td>
            <td scope="col"><?php echo $array[7] ?></td>
			</tr>
			</tbody>
		</table>
            

        <table class="table table-striped table-bordered table-condensed">
			<thead>
			<tr>
            <th scope="row">9. ¿Has tenido diarrea, vómitos, fiebre o consumido antibióticos en las últimas 2 semanas?</th>
			<th scope="row">10. ¿Te has vacunado contra la fiebre amarilla, rubeóla o sarampión en los últimos 2 meses?</th>
			<th scope="row">11. ¿Has tenido Cáncer?</th>
			<th scope="row">12. ¿Tienes una enfermedad cardiaca o renal?</th>
            <th scope="row">13. ¿Te inyectas insulina?</th>
            <th scope="row">14. ¿En los últimos 4 meses te recetaron Isotretinoína?</th>
            <th scope="row">15. ¿En los últimos 2 meses te recetaron Finasteride?</th>
            <th scope="row">16. ¿Has tenido una nueva pareja sexual? (Considerando menos de 6 meses)</th>
			</tr>
			</thead>
			<tbody>
            <tr>
            <td scope="col"><?php echo $array[8] ?></td>
            <td scope="col"><?php echo $array[9] ?></td>
            <td scope="col"><?php echo $array[10] ?></td>
            <td scope="col"><?php echo $array[11] ?></td>
            <td scope="col"><?php echo $array[12] ?></td>
            <td scope="col"><?php echo $array[13] ?></td>
            <td scope="col"><?php echo $array[14] ?></td>
            <td scope="col"><?php echo $array[15] ?></td>
			</tr>
			</tbody>
		</table>


        <table class="table table-striped table-bordered table-condensed">
			<thead>
			<tr>
            <th scope="row">17. ¿Estás embarazada o crees estarlo?</th>
			<th scope="row">18. ¿Te has realizado piercing, tatuajes o acupuntura en el último año?</th>
			<th scope="row">19. ¿Has consumido cocaína y sus derivados o drogas inyectables en el último año?</th>
			<th scope="row">20. ¿Te has realizado endoscopía o colonoscopía en el último año?</th>
            <th scope="row">21. ¿Has tenído una cirugía con más de 5 días de hospitalización en el último año?</th>
            <th scope="row">22. ¿Has consumido Etretinato en el último año?</th>
            <th scope="row">23. ¿Has tenído más de una pareja sexual en el último año?</th>
            <th scope="row">24. ¿Has tenído o crees tener alguna enfermedad de transmisión sexual?</th>
			</tr>
			</thead>
			<tbody>
            <tr>
            <td scope="col"><?php echo $array[16] ?></td>
            <td scope="col"><?php echo $array[17] ?></td>
            <td scope="col"><?php echo $array[18] ?></td>
            <td scope="col"><?php echo $array[19] ?></td>
            <td scope="col"><?php echo $array[20] ?></td>
            <td scope="col"><?php echo $array[21] ?></td>
            <td scope="col"><?php echo $array[22] ?></td>
            <td scope="col"><?php echo $array[23] ?></td>
			</tr>
			</tbody>
		</table>
        <br><br><br><br>
        <h2>Anotaciones: </h2>
        <br><br>
        <?php
        if($array[0] == "No"){
        ?><li>Debes tener entre 18 y 60 años.</li>
        <?php
        }
        ?>


        <?php
        if($array[1] == "No" || $array[1] == "No se"){
        ?><li>Debes pesar más de 50 kilos y tener un IMC >= 20.</li>
        <?php
        }
        ?>
        

        <?php
        if($array[2] == "No" || $array[2] == "No se"){
        ?><li>Debes dormir las horas habituales.</li>
        <?php
        }
        ?>


        <?php
        if($array[3] == "No"){
        ?><li>Debes haber comido en las últimas 5 horas previas a donar sangre, ya sea haber desayudano o almorzado, de esta forma reduces el riesgo de marearte tras la extracción.</li>
        <?php
        }
        ?>


        <?php
        if($array[4] == "Si"){
        ?><li>No puedes consumir alcohol en las últimas 12 horas previas a donar.</li>
        <?php
        }
        ?>


        <?php
        if($array[5] == "Si" || $array[5] == "Prefiero no responder"){
        ?><li>No puedes consumir marihuana en las últimas 24 horas previas a donar.</li>
        <?php
        }
        ?>


        <?php
        if($array[6] == "No" || $array[6] == "Si"){
        ?><li>La hipertensión controlada no es motivo de exclusión para donar sangre.</li>
        <?php
        }
        ?>


        <?php
        if($array[7] == "Si"){
        ?><li>No puedes donar sangre si tienes heridas en la boca o lesiones en la zona de punción.</li>
        <?php
        }
        ?>


        <?php
        if($array[8] == "Si"){
        ?><li>No puedes donar sangre si has tenido diarrea, vómitos, fiebre o consumido antibiótios en las últimas 2 semanas.</li>
        <?php
        }
        ?>


        <?php
        if($array[9] == "Si"){
        ?><li>No puedes donar sangre si te has vacunado contra la fiebre amarilla, rubeóla o sarampión en los últimos meses.</li>
        <?php
        }
        ?>


        <?php
        if($array[10] == "Si"){
        ?><li>No puedes donar sangre si has tenído cáncer.</li>
        <?php
        }
        ?>


        <?php
        if($array[11] == "Si" || $array[11] == "No se"){
        ?><li>No puedes donar sangre si has tenído una enfermedidad cardiaca o renal.</li>
        <?php
        }
        ?>


        <?php
        if($array[12] == "Si"){
        ?><li>No puedes donar sangre si te inyectas insulina.</li>
        <?php
        }
        ?>


        <?php
        if($array[13] == "Si"){
        ?><li>No puedes donar sangre si en los útlimos 4 meses te recetaron Isotretinoína.</li>
        <?php
        }
        ?>


        <?php
        if($array[14] == "Si"){
        ?><li>No puedes donar sangre si en los útlimos 4 meses te recetaron Finasteride.</li>
        <?php
        }
        ?>


        <?php
        if($array[15] == "Si" || $array[15] == "Prefiero no responder"){
        ?><li>No puedes donar sangre si has tenído una nueva pareja sexual considerando los últmos 6 meses.</li>
        <?php
        }
        ?>


        <?php
        if($array[16] == "Si"){
        ?><li>No puedes donar sangre si estás o crees estar embarazada.</li>
        <?php
        }
        ?>


        <?php
        if($array[17] == "Si"){
        ?><li>No puedes donar sangre si te has realizado piercing, tatuajes o acupuntura en el último año.</li>
        <?php
        }
        ?>


        <?php
        if($array[18] == "Si" || $array[18] == "Prefiero no responder"){
        ?><li>No puedes donar sangre si has consumido cocaína y sus derivados o drogas inyectables en el último año.</li>
        <?php
        }
        ?>


        <?php
        if($array[19] == "Si"){
        ?><li>No puedes donar sangre si te has realizado endoscopía o colonoscopía en el último año.</li>
        <?php
        }
        ?>


        <?php
        if($array[20] == "Si"){
        ?><li>No puedes donar sangre si has tenído una cirugía con más de 5 días de hospitalización en el último año.</li>
        <?php
        }
        ?>


        <?php
        if($array[21] == "Si"){
        ?><li>No puedes donar sangre si has consumido Etretinato en el último año.</li>
        <?php
        }
        ?>


        <?php
        if($array[22] == "Si" || $array[22] == "Prefiero no responder"){
        ?><li>No puedes donar sangre si has tenído más de una pareja sexual en el último año.</li>
        <?php
        }
        ?>


        <?php
        if($array[23] == "Si"){
        ?><li>No puedes donar sangre si has tenído o crees tener alguna enfermedad de transmisión sexual.</li>
        <?php
        }
        ?>


    	</div>
    </div>
  </main>
</div>