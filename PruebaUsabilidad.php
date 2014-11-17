<?php
session_start();

if( !isset($_SESSION['admTerm_logged']) ){	
	header('Location: ./index.php'); 
} 

if(isset($_POST["ir"], $_POST["identificadorProyecto"]))
{
	
	
	
	 $_SESSION['idProyecto'] =  $_POST["identificadorProyecto"];
}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Pruebas de Usabilidad Seme</title>
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
	    <div style="height: 1.11667px;" aria-expanded="false" class="navbar-collapse navbar-responsive-collapse collapse">	    	<ul class="nav navbar-nav navbar-right">
	    		  <li><a href="Proyecto.php">Proyectos</a></li>
	    	      <li class="active"><a href="#">Pruebas de Usabilidad</a></li>
          	      <li class="dropdown">
      	             <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <b class="caret"></b></a>
      	             <ul class="dropdown-menu">
      	               <li><a href="#">Ayuda</a></li>
      	               <li><a href="#">Contacto</a></li>
      	               <li class="divider"></li>
      	               <li><a href="#">Derechos de Privacidad</a></li>
      	             </ul>
                  </li>	    	      
	    	      <li><a href="salir.php">Salir</a></li>
		    </ul>	
	    </div>
	</div>
	
	

	<div class="container" >
		
		<form class="form" method="post" action="Crear_PruebaUsabilidad.php">  <!--en este archivo agregaremos los proyectos  a la base de datos, creados por este usuario-->
			
			<fieldset>
				<div class="col-lg-6">
				<div class=" panel panel-default">
					<div class="panel-heading"><h3 class="text-center">Crear <strong>nueva Prueba de Usabilidad</h3></div>
					<div class="panel-body">
						<div class="form-group">
							
							<div class="col-lg-12">	
								
								<input class="form-control" id="pu" type="text"  name="nombre" placeholder="Escriba el nombre de la nueva Prueba de Usabilidad." /> 
								
							</div>
							<div class="col-lg-12 top-buffer text-center">
								<input class="btn btn-success btn-md" type="submit" value = "Agregar"/>
								
							</div>

						</div>
					</div>
				</div>
				</div>		
			</fieldset>		

		</form>
		
	</div>


	





<?php
	
	include ("conexion.php");	/** aqui incluimos nuestro archivo de conexion **/ 	
	echo"<div class='container' style='margin-bottom:12%;'>";
	
	$idProyecto = $_SESSION['idProyecto'];	
	//echo "Variable session es = ".$idProyecto; 
	$consulta= mysql_query(" SELECT Nombre, idPruebaUsabildad FROM PruebaUsabildad WHERE Proyecto_idProyecto = '$idProyecto'",@$conectando );  // el querry que nos muestre todos los proyectos echos por este usuario  
	
	
	
	

	echo"<h3>Pruebas de Usabilidad</h3>";


	
	echo "<div class='row'>";
		
		while($array_consulta= mysql_fetch_array($consulta)) // un ciclo para mostrar todo los proyectos
		{
		
		$idPrueba = $array_consulta['idPruebaUsabildad'];
		$nombrePrueba = $array_consulta['Nombre'];
		

		echo "<div class='col-md-4'>";
			echo"<div class='panel panel-success'>";

				echo " <div class='panel-heading'>
							<div class='row'>
								<div class='col-md-6'>
									
										<h4>".$array_consulta['Nombre']."</h4>
								</div>	
								<div class='col-md-6 text-right'>
				 			 		<form method = 'post' action = 'Cuestionario.php'>
				 			 			<label>  

			 			 					<input type='hidden' name='identificadorPrueba' value= '".$idPrueba."'/>
			 			 					<input type='hidden' name='nombrePrueba' value= '".$nombrePrueba."'/>
			 			 					<button type='submit' name = 'ir' class='btn btn-default btn-sm'>
			 			 					  <span class='glyphicon glyphicon-cog' aria-hidden='true'></span> 
			 			 					</button>
				 			 									
				 			 		</form>
				 			 	</div>					 

							</div>
					   </div>";	
				echo " <div class='panel-body'>";		
				

				
				echo "</div>";
				echo "</div>";	
		echo "</div>";	
		}
	echo "</div>";

	

?>


</body>

</html>


