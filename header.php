<?php
  
  include("base/conexion.php");
  session_start();
  if (isset($_SESSION["Nombres"])) {
  $user = $_SESSION["Nombres"];
  }
 
?>
<div class="wrapper row0">
  <div id="topbar" class="hoc clear">
    <div class="fl_left"> 
      <!-- ################################################################################################ -->
      <ul class="nospace">
        <li><i class="fas fa-phone rgtspace-5"></i> +56 2  2913 0000</li>

        <?php
          if(isset($_SESSION["Nombres"])){
            ?>

              <li><p>Bienvendio <?php echo $user; ?></p></li>

            <?php
          }
          else{
          ?>

            <li><p>Por favor inicie sesión</p></li>

          <?php
          }
          ?>
        
        
      </ul>
      <!-- ################################################################################################ -->
    </div>
    <div class="fl_right"> 
      <!-- ################################################################################################ -->
      <ul class="nospace">
        <!--
        <li><a href="index.html"><i class="fas fa-home"></i></a></li>
        <li><a href="#" title="Help Centre"><i class="far fa-life-ring"></i></a></li>
      


        puse estos botones como comentario porque abajo están los otros botones

        <li><a href="ingresar.php" title="Ingresar"><i class="fas fa-sign-in-alt"></i></a></li>
        <li><a href="registro.php" title="Registrar"><i class="fas fa-edit"></i></a></li>
        -->
        
        <!-- 
        <li id="searchform">
          <div>
            <form action="#" method="post">
              <fieldset>
                <legend>Quick Search:</legend>
                <input type="text" placeholder="Enter search term&hellip;">
                <button type="submit"><i class="fas fa-search"></i></button>
              </fieldset>
            </form>
          </div>
        </li>
      -->
      </ul>
      <!-- ################################################################################################ -->
    </div>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear">
    <div id="logo" class="fl_left"> 
      <!-- ################################################################################################ -->
      <h1><a href="index.php">Clinica Santa María</a></h1>
      <!-- ################################################################################################ -->
    </div>
    <nav id="mainav" class="fl_right"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li class="active"><a href="index.php">Inicio</a></li>
        <li><a class="drop" href="#">Páginas</a>
          <ul>
            <?php
            if(isset($_SESSION["Nombres"])){
            ?>
            <li><a href="respuestas.php">Mis respuestas</a></li>
            <?php
            }
            ?>
            <?php
            if(isset($_SESSION["Nombres"])){
              if($_SESSION["Nombres"] == "Admin"){
            ?>
              <li><a href="comentarios_admin.php">[A]Comentarios</a></li>
            <?php
              }
              else{
            ?>
              <li><a href="comentarios.php">Comentarios</a></li>
            <?php
              }
            }
            ?>
            
            <!-- 
              <li><a href="pages/gallery.html">Gallery</a></li>
            <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
            <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
            <li><a href="pages/basic-grid.html">Basic Grid</a></li>
            <li><a href="pages/font-icons.html">Font Icons</a></li>
            -->
          </ul>
        </li>
        
        

            <?php
              if(isset($_SESSION["Nombres"])){
                ?>
                  <li><a href="formulario.php">Formulario</a></li>
                  <li><a href="editar.php">Editar</a></li>
                  <li><a href="salir.php">Salir</a></li>
                <?php
              }
              else{
                ?>
                  <li><a href="ingresar.php">Ingresar</a></li>
                  <li><a href="registro.php">Registrarse</a></li>
                <?php
              }
            ?>
        
        
      </ul>
      <!-- ################################################################################################ -->
    </nav>
  </header>
</div>