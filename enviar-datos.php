
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Proyectos Seme</title>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <meta name="author" content="UAM ,UAM Cuajimalpa, Santiago Aviles Vazquez, Francisco Alvarez, Alicia, Yadira" >
  <meta name="description" content="Sistema Laboratorio de Usabilidad" >
  <meta name="Robots" content="none" >   

  <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="bootstrap/js/jquery/dist/jquery.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<div class="navbar navbar-inverse">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button> 
        <a class="navbar-brand" href="./index.php">Seme - Laboratorio de Usabilidad</a>
      </div>
      <div style="height: 1.11667px;" aria-expanded="false" class="navbar-collapse navbar-responsive-collapse collapse">        
      <ul class="nav navbar-nav navbar-right">
            <li><a href="Proyecto.php">Proyectos</a></li>
              <li class="active"><a href="#">Pruebas de Usabilidad</a></li>
                  <li class="dropdown">
                     <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <b class="caret"></b></a>
                     <ul class="dropdown-menu">
                       <li><a href="#">Ayuda</a></li>
                       <li><a href="contacto.php">Contacto</a></li>
                       <li class="divider"></li>
                       <li><a href="#">Derechos de Privacidad</a></li>
                     </ul>
                  </li>             
              <li><a href="salir.php">Salir</a></li>
        </ul> 
      </div>
  </div>
<div class="row top-buffer">
  <div class="col-md-4">
  	<h1>Nos pondremos en contacto contigo pronto
  	<?php
$nombre = $_POST['nombre'];
echo $nombre;
?></h1>
  </div>
  

</body>
</html>
<!-- Nombre del usuario<input name="nombre" type="text" placeholder="Escribe tu nombre"/><br>
      Fecha de Nacimiento: <input type="date" name="date_control"  /><br>
      Correo<input type="email" name="email">
      <label for="textArea" class="col-md-6 control-label">Comentarios</label>     
        <textarea class="form-control" rows="3" id="textArea"></textarea>
        <span class="help-block">Dejanos saber tu satisfacción de usuario.</span>
        <button class="btn btn-default">Cancelar</button>
        <button type="submit" class="btn btn-primary">Enviar</button>  -->