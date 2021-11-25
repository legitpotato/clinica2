<?php include("header.php"); ?>
<!DOCTYPE html>

<html lang="es">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Banco de Sangre</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style-form.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body id="top">


<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay gradient" style="background-image:url('images/demo/backgrounds/doc.jpg');">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    
    <div class="container" id="advanced-search-form">
        <h2>Registro</h2>
        <form action="validad_registro.php" method="POST">
            <div class="form-group">
                <label for="first-name">Nombres</label>
                <input type="text" class="form-control" placeholder="Nombres" name="Nombres" required="required">
            </div>
            <div class="form-group">
                <label for="last-name">Apellidos</label>
                <input type="text" class="form-control" placeholder="Apellidos" name="Apellidos" required="required">
            </div>
            <div class="form-group">
                <label for="country">Ciudad</label>
                <input type="text" class="form-control" placeholder="Ciudad" name="Ciudad" required="required">
            </div>
            <div class="form-group">
                <label for="number">Telefono</label>
                <input type="text" class="form-control" placeholder="Telefono" name="Telefono" required="required">
            </div>
            <div class="form-group">
                <label for="age">Edad</label>
                <input type="text" class="form-control" placeholder="Edad" name="Edad" required="required">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" placeholder="Email" name="Email" required="required">
            </div>
            <div class="form-group">
                <label for="email">Rut</label>
                <input type="number" class="form-control" placeholder="Rut" name="Rut" required="required">
            </div>
            <div class="form-group">
                <label for="email">Contraseña</label>
                <input type="password" class="form-control" id="Pass1" placeholder="Contraseña" name="Pass1" required="required">
            </div>
            <div class="form-group">
                <label for="email">Repetir Contraseña</label>
                <input type="password" class="form-control" id="Pass2" placeholder="Contraseña" name="Pass2" required="required">
            </div>
            
            
            <div class="form-group">
                <label>Género</label>
                <div class="radio">
                    <label class="radio-inline" >
                        <input type="radio" name="optradio1" value="Masculino">Masculino</label required="required">
                    <label class="radio-inline">
                        <input type="radio" name="optradio1" value="Femenino">Femenino</label>
                    <label class="radio-inline">
                        <input type="radio" name="optradio1" value="Otro">Otro</label>
                </div>
            </div>
            <div class="clearfix"></div>
            <button type="submit" class="btn btn-info btn-lg btn-responsive" id="search"> <span class="glyphicon glyphicon-search"></span> Registrar</button>
        </form>

        
    </div>
    </div>
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





<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>