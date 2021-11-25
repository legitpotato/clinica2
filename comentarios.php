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
      <div id="comments">
        <h2>Comentarios</h2>
        

        <h2>Escribe un comentario</h2>
        <form action="agregar-comentario.php" method="post">

          <div class="one_third first">
            <label for="name">Nombre <span>*</span></label>
            <input type="text" name="nombre" id="nombre" value="" size="22" required = "required">
          </div>

          <div class="one_third">
            <label for="email">Rut <span>*</span></label>
            <input type="number" name="rut" id="rut" value="" size="22" required="required">
          </div>

          <div class="one_third">
            <label for="email">Email <span>*</span></label>
            <input type="email" name="email" id="email" value="" size="22" required="required">
          </div>
          
          <div class="block clear">
            <label for="comment">Tu comentario</label>
            <textarea name="comentario" id="comment" cols="25" rows="10" required="required"></textarea>
          </div>
          <div>
            <input type="submit" name="submit" value="Enviar comentario">
            
          </div>
        </form><br><br><br><br><br>


        <!-- EXTRACION DE COMNETARIOS DESDE LA BASE DE DATOS -->
        <?php 
          $Comentarios = $conexion->query("SELECT * FROM comentarios;");
          

          foreach($Comentarios as $comentario){?>

            <ul>
              <li>
                <article>
                  <header>
                  <address>
                    Por <a href="#"><?php echo $comentario['Nombre'] ?></a>
                    </address>
                    <!-- <time datetime="2045-04-06T08:15+00:00">Friday, 6<sup>th</sup> April 2045 @08:15:00</time> -->
                  </header>
                  <div class="comcont">
                    <p><?php echo $comentario['Comentario'] ?></p>
                  </div>
                </article>
              </li>  
            </ul>

            

          <?php
          }
          ?>


      </div>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
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