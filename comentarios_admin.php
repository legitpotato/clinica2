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

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay gradient" style="background-image:url('../images/demo/backgrounds/01.png');">
  <div id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <h6 class="heading">Comentarios</h6>
    <ul>
      <li><a href="index.php">Inicio</a></li>
      <li><a href="comentarios.php">Comentarios</a></li>
      
    </ul>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      
      <!-- EXTRAERLOS DESDE LA BASE DE DATOS  -->

      <table class="table table-striped table-bordered table-condensed">
      <thead>
      <tr>
        <th>ID</th>
        <th>RUT</th>
        <th>Comentario</th>
        <th></th>
      </tr>
      </thead>
      <tbody>
      <?php
        $conn = mysqli_connect("bft4tkk8rm2x28aipdxo-mysql.services.clever-cloud.com", "uk6jrnxz2lrw4i6m", "6WsyDL5ctp48vTUH6up9", "bft4tkk8rm2x28aipdxo");
      if ($conn-> connect_error) {
        die("Conexión fallida:". $conn-> connect_error);
      }
      $sql = "SELECT * FROM comentarios;";
      $result = $conn-> query($sql);
      if($result -> num_rows > 0) {
        while ($row = $result-> fetch_assoc()) { ?>
          <tr>
            <td><?php echo $row["ID"] ?></td>
            <td><?php echo $row["Rut"] ?></td>
            <td><?php echo $row["Comentario"] ?></td>
            <td style="text-align: center;">
              <a href="validar_comentarios_admin.php?borrar=<?php echo $row['ID'];?>" class="btn btn-mini btn-danger">Borrar</a>
            </td>
          </tr>
        <?php }
        echo "</table>";
      }
      else {
        echo "0 resultados.";
      }
      $conn-> close();
      ?>
      </tbody>
    </table>


    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
  </main>
</div>

<div class="wrapper row4">
  <section id="footer" class="hoc clear"> 

    <ul class="nospace clear">
      <li class="one_quarter first">
        <div class="block clear"><a href="#"><i class="fas fa-phone"></i></a> <span><strong>Llamanos</strong> +56 2  2913 0000</span></div>
      </li>
      <!--
      <li class="one_quarter">
        <div class="block clear"><a href="#"><i class="fas fa-envelope"></i></a> <span><strong>Send us a mail:</strong> support@domain.com</span></div>
      </li>
    -->
      <li class="one_quarter">
        <div class="block clear"><a href="#"><i class="fas fa-clock"></i></a> <span><strong>Horario</strong> Las 24 horas del día, los 365 días del año.</span></div>
      </li>
      <li class="one_quarter">
        <div class="block clear"><a href="#"><i class="fas fa-map-marker-alt"></i></a> <span><strong>Ubicación</strong> Av. Santa María 0500, Providencia.</span></div>
      </li>
    </ul>
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>