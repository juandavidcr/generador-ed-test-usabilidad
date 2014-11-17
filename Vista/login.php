<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Login</title>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta name="author" content="UAM ,UAM Cuajimalpa, Santiago Aviles Vazquez, Francisco Alvarez, Alicia, Yadira" >
	<meta name="description" content="Sistema Laboratorio de Usabilidad" >
	<meta name="Robots" content="none" >   

	<link href="./bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="./bootstrap/js/jquery/dist/jquery.js"></script>
	<script type="text/javascript" src="./bootstrap/js/bootstrap.js"></script>
</head>

<body>
<div class="navbar navbar-default">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
	    </button>
	    <a class="navbar-brand" href="./index.php">Seme</a>
    </div>
    <div style="height: 1.11667px;" aria-expanded="false" class="navbar-collapse navbar-responsive-collapse collapse">
    
    	<ul class="nav navbar-nav navbar-right">
    	      <li><a href="#">Registro</a></li>
    	      <li class="dropdown">
    	             <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <b class="caret"></b></a>
    	             <ul class="dropdown-menu">
    	               <li><a href="#">Ayuda</a></li>
    	               <li><a href="#">Contacto</a></li>
    	               <li class="divider"></li>
    	               <li><a href="#">Derechos de Privacidad</a></li>
    	             </ul>
              </li>
    	      
	    </ul>	
    </div>
</div>
<div class="container">

<h1 class="text-center">Bienvenido a SEME</h1>
<h1 class="text-center"><small>&ltLaboratorio de Usabilidad Virtual&gt</small></h1>
</div>
<div class="row top-buffer">
	<div class="col-md-4"></div>
	<div class="col-md-4">

		<form class="form-horizontal" role="form" method="post" action="./login.php">
			<div class="panel panel-default">
			<div class="panel-body">
			<fieldset>
				<legend>Escriba sus datos:</legend>
				<div class="form-group">
					<label for="entraNombre" class="col-lg-2 control-label" >Nombre</label>
					<div class="col-lg-10">
						<input id="entraNombre" class="form-control" type="text"  name="nombre" placeholder="Escriba su nombre." />  <!--AQUI GUARDAREMOS EL NOMBRE QUE VALIDAREMOS PARA EL LOGIN    -->
					</div>
				</div>
				<div class="form-group">
					<label for="entraPassword" class="col-lg-2 control-label" >Password</label>
					<div class="col-lg-10">
						<input id="entraPassword"  class="form-control" type="password"  name="pass" placeholder="Escriba su password."/> <!--AQUI GUARDAREMOS LA CONTRASEÑA QUE VALIDAREMOS PARA EL LOGIN    -->
					</div>
				</div>
				<div class="form-group">
					<div class="col-lg-16 col-lg-offset-5">
						
						<input class="btn btn-primary top-buffer" type="submit" value = "Entrar"/>
					</div>
	   			</div>	
			</fieldset>
			</div>
			</div>
		</form>
	<div>
</div>

</body>

</html>
