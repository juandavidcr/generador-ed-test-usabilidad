<?php
session_start();
if( !isset($_SESSION['admTerm_logged']) ){	
	header('Location:./index.php'); 
}
if(isset($_POST["ir"], $_POST["identificadorPrueba"], $_POST['nombrePrueba']))
{
	
	
	
	
	 $_SESSION['idPrueba'] =  $_POST["identificadorPrueba"];
	 $_SESSION['nombrePrueba'] = $_POST['nombrePrueba'];
	 //echo "el id prueba es ." .$_SESSION['idPrueba'];

	
}

$idPrueba = $_SESSION['idPrueba'];
$nombrePrueba = $_SESSION['nombrePrueba'];
//echo "$nombrePrueba";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Cuestionarios Seme</title>
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
	    	      <li><a href="PruebaUsabilidad.php">Pruebas de Usabilidad</a></li>
		   		  <li class="active"><a href="#">Cuestionarios</a></li>
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
	
	<div class="container-fluid " style='margin-bottom:12%;'>
		<div class="row" >

			<div class="col-md-4">

			      <form method="post" action="Update_Prueba_Nombre.php">
				 		<div class="panel panel-default">
							<div class="panel-heading"><h2>Editar <strong>nombre Prueba</strong></h2></div>	
							<div class="panel-body">
								<input class="form-control" id="pu" type="text"  name="nombre" value='<?php echo $nombrePrueba?>' placeholder="Editar Nombre de Prueba de Usabilidad." /> 									
								<input type="hidden" name="identificadorPrueba" value= '<?php echo $idPrueba?>'/>
								<h1 class="text-center ">	
									<button type="submit" class="btn btn-success btn-lg">Guardar Cambios</button>
									
								</h1>
							</div>
				      </div>
			      </form>

				<form method="post" action="Crear_Cuestionario.php">  <!--en este archivo agregaremos los proyectos  a la base de datos, creados por este usuario-->
					<fieldset>
						<div class="panel panel-default">
							<div class="panel-heading"><h2>Crear <strong>Pregunta</strong></h2></div>
							<div class="panel-body">
								<div class="form-group">
									<label>Pregunta</label>    <!--Aqui enviaremos el nombre del proyecto-->
									<div class="col-lg-16">		
										<input type="text"  class="form-control" name="pregunta" placeholder="Escriba la pregunta..." /> 
									</div>
								</div>
								<div class="form-group">
									 Escriba el tiempo de la prueba: 
										<!--Aqui enviaremos el nombre del proyecto-->
										<label>Tiempo Optimo: </label>	
										<div class="col-lg-16">	
											
											<input type="text" class="form-control" name="tiempoOptimo" placeholder="Unidad Segundos"/> 
											
										</div>	
										

								
										 <!--Aqui enviaremos el tipo del proyecto-->
										 <label>Tiempo Aceptable:</label> 
										<div class="col-lg-16">	

											<input type='hidden' name='identificadorPrueba' value= '<?php echo $idPrueba?>'/>
											<input type='hidden' name='nombrePrueba' value= '<?php echo $nombrePrueba ?>'/>
											<input type="text"  class="form-control" name="tiempoAceptable" placeholder="Unidad Segundos"/>
										</div>				
											
								</div>
								<h1 class="text-center">
									<input class='btn btn-success btn-lg' type="submit" value = "Agregar"/>
								</h1>
							</div>	
						</div>
					</fieldset>		
				</form>

				<form class="form" method="post" action="Cuestionario_checkBox.php">  <!--en este archivo agregaremos los proyectos  a la base de datos, creados por este usuario-->
					<fieldset>
						<div class="panel panel-default">
							<div class="panel-heading"><h2>Preguntas predefinidas</h2></div> 
							<div class="panel-body">
								<input type='hidden' name='identificadorPrueba' value= '<?php echo $idPrueba?>'/>
								<input type='hidden' name='nombrePrueba' value= '<?php echo $nombrePrueba ?>'/>
								<input name="a" type="checkbox" id ="pre_1" value="Registrese en la pagina web" />
									Registrese en la pagina web <br> 
								<input type="checkbox" id ="pre_2" name="b" value="Ingrese su nombre y contraseña para entrar en el sistema" />
									Ingrese su nombre y contraseña para entrar en el sistema <br>
								<input type="checkbox" name="c" id="pre_3" value="Cierre el sistema "/>
									Cierre el sistema <br> 			
								<input type="checkbox" name="d" id="pre_4" value="Vayase por unas tortas"/>
									Vayase por unas tortas<br> 			
								<h1 class="text-center">
									<input class="btn btn-success btn-lg" type="submit" value = "Agregar"/>
								</h1>
							</div>
						</div>	
					</fieldset>		
				</form>


			</div>


			<div class="col-md-8">
				<div class="panel panel-default">
				<div class="panel-heading"><h2>Cuestionario</h2></div>
				<div class="panel-body">
				<?php
					
					
					include ("conexion.php");	/** aqui incluimos nuestro archivo de conexion **/ 
					$idPrueba = $_SESSION['idPrueba'];
					$no_Pregunta =1; // esta variable esta para enumerar las preguntas
					

					$consulta= mysql_query(" SELECT Pregunta,Tiempo_Optimo,Tiempo_Acaptable,Comentario, idCuestionario FROM Cuestionario WHERE PruebaUsabildad_idPruebaUsabildad = '$idPrueba'",@$conectando );  // el querry que nos muestre todos los proyectos echos por este usuario  
						
						
						echo"<table class='table table-bordered table-striped table-hover table-responsive'>
						    <thead>
								<tr>
									<th>No.</th>
									<th>Pregunta</th>
									<th>Tiempo Optimo</th>
									<th>Tiempo Aceptable</th>
									<th>Comentario</th>
									
								</tr>
							</thead>
							<tbody>"; // creamos una tabla para mostrar todos los proyectos de este usuario 
						
						while($array_consulta= mysql_fetch_array($consulta)) // un ciclo para mostrar todo los proyectos
						{
							$idPregunta = $array_consulta['idCuestionario'];
							
							echo "<tr>";
							echo "<td>".$no_Pregunta."</td>";  // aqui se mostraran los id  del proyecto
							echo "<td>".$array_consulta['Pregunta']."</td>";// aqui se mostraran el nombre del proyecto
							echo "<td>".$array_consulta['Tiempo_Optimo']."</td>";
							echo "<td>".$array_consulta['Tiempo_Acaptable']."</td>";			
							echo "<td>".$array_consulta['Comentario']."</td>";
							echo "<td>
									<form method = 'post' action = 'Eliminar_Pregunta.php'>
										<label>     
											<input type='hidden' name='Eliminar_Pregunta' value= '$idPregunta'/>
											<button class='btn btn-default btn-sm' type='submit'  name = 'aqui_solo_pucho'>
												<span class='glyphicon glyphicon-remove'></span>
											</button>		
										</label>					
									</form>
									</td>";
							echo"</tr>";
							$no_Pregunta ++;
						}

						echo "</tbody>
						</table>
				</div>
				</div>";
						
						echo "<div class='panel panel-default'>
									<div class='panel-body'>
										<div class='text-center'>
											<form method = 'post' action = 'Elimminar_Prueba.php'>
																	
												<input type='hidden' name='Eliminar_Prueba' value= '$idPrueba'>
												<button type='submit' class='btn btn-danger btn-lg' name = 'aqui_solo_pucho'>
													<span class='glyphicon glyphicon-remove'></span> Eliminar <strong>Prueba de Usabilidad</strong>
												</button>	
										    </form>
									</div>
									</div>
							  </div>";?>
					
			</div>

		</div>
	</div>
	
</body>

</html>







	




