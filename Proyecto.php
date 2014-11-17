
<?php
	
	session_start();
	//if( !isset($_SESSION['admTerm_logged']) ){	
	//	include 'Location: login.php'; 
	if( !isset($_SESSION['admTerm_logged']) ){	
		header('Location: /vista/login.php'); 
	}

	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
	<header class="navbar navbar-default">
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
	    	      <li class="active"><a href="#">Proyectos</a></li>
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
	    </header>
	</div>
	<div class="container" >
	<div class="row">
		<div class="col-md-4">	
		<form class="form" method="post" action="Crear_Proyecto.php">  <!--en este archivo agregaremos los proyectos  a la base de datos, creados por este usuario-->
			<fieldset>
				<div class="panel panel-default">
					<div class="panel-heading"><h2>Crear <strong>Nuevo</strong> Proyecto</h2></div>
					<div class="panel-body">
						<div class="form-group">
							
							<label class="control-label"> Proyecto: </label>    <!--Aqui enviaremos el nombre del proyecto-->
							<div class="col-md-16">
								<input type="text" class="form-control" name="nombre" placeholder="Escriba el Nombre de proyecto." /> 
							</div>
						</div>
						<div class="form-group">
							<label>Tipo:</label>  <!--Aqui enviaremos el tipo del proyecto-->
							<div class="col-lg-16">	
								<input type="text" class="form-control"  name="tipo" placeholder="Escriba el tipo de proyecto."/> 
							</div>
						</div>
						<div class="form-group text-center">
								<input class="btn btn-primary btn-lg" type="submit" value = "Agregar"/>
						</div>	
					</div>
				</div>
			</fieldset>		
		</form>
		</div>
		

		<div class="col-md-8">	
		<div class="panel panel-default">
		<?php
			
			
			//if( !isset($_SESSION['admTerm_logged']) ){	
			//	include 'Location: login.php'; 
			//} 


			include ("conexion.php");	/** aqui incluimos nuestro archivo de conexion **/ 	
			$idUsuario  = $_SESSION['idUsuarioSession'];
			

			$consulta= mysql_query(" SELECT Nombre , Tipo, idProyecto FROM Proyecto WHERE Usuario_idUsuario = '$idUsuario'",@$conectando );  // el querry que nos muestre todos los proyectos echos por este usuario  
			
			
			
			
			
			
				echo '<div class="panel-heading"><h2>Proyectos</h2></div>
					  <div class="panel-body">';
						
						while($array_consulta= mysql_fetch_array($consulta)) // un ciclo para mostrar todo los proyectos
						{
							$idProyecto = $array_consulta['idProyecto'];  // en esta variable guardamos el id del proyecto para poderlo ocupar en la opcion de eliminar y crear uan prueba de usabilidad 
							
							echo '<div class="modal" id="'.$idProyecto.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									  <div class="modal-dialog">
									    <form method="post" action="Update_Proyecto_Nombre_Tipo.php">
										    <div class="modal-content">
										      <div class="modal-header">
										        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
										        <h3 class="modal-title">Edita [ '.$array_consulta['Nombre'].' ]
													<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#$idPrueba">
														<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
													</button>	
										        </h3>
										      </div>
										      
										      <div class="modal-body">
										      	<div class="form-group">
										      		
										      		<label for="nombreProyecto" class="control-label">Nombre Proyecto</label>
										      		
										        	<input class="form-control" id="nombreProyecto" type="text"  name="nombre" value="'.$array_consulta['Nombre'].'" placeholder="Escriba el Nombre del Proyecto."/> 
													
												</div>									        
												<div class="form-group">
										        	<label for="tipoProyecto" class="control-label">Tipo Proyecto</label>
										         		
									         		<input class="form-control" id="tipoProyecto" type="text"  name="tipo" value="'.$array_consulta['Tipo'].'" placeholder="Escriba el Tipo de Proyecto" /> 
										        	
										        </div>

										      </div>

										      <div class="modal-footer">
										      	
										      		<input type="hidden" name="identificadorProyecto" value= "'.$idProyecto.'"/>
										        	<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
										        	<button type="submit" class="btn btn-primary">Guardar Cambios</button>
										      	
										      </div>
										      
										    </div>
									    </form>
									  </div>
									</div>';

							echo '<ul class="list-group">
									  <li class="list-group-item">
									    <span class="badge">
										    <form class="form" method = "post" action = "Eliminar_Proyecto.php">
										    	  
																	
										    		<input type="hidden" name="Eliminar_Proyecto" value= "'.$idProyecto.'">
										    		<button type="submit" class="btn btn-default btn-xs"  name = "aqui_solo_pucho">
										    			<span class="glyphicon glyphicon-remove"></span>
										    		</button>
										    								
										    </form>
									    </span> 
									    
										 <span>ID: '.$array_consulta['idProyecto'].' </span>			    
									     <h4>										     
										     '.$array_consulta['Nombre'].' - '.$array_consulta['Tipo'].'
									     </h4>
									  	 <div>
											<table class="table table-condensed" >	
											<tbody>
											 <tr>
											 <td class="text-center" width="100">			
									  	 	 <button class="btn btn-warning btn-md" data-toggle="modal" data-target="#'.$idProyecto.'">
									  	 	 	Editar <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 
									  	 	 </button>
									  	 	 </td>
									  	 	<td class="text-center" width="100">
										  	 <form class="form" method = "post" action = "PruebaUsabilidad.php">
										    	 
									    		<input type="hidden" name="identificadorProyecto" value= "'.$idProyecto.'">
									    		<button  class="btn btn-success btn-md" type="submit" name = "ir">
									    			Entrar <span class="glyphicon glyphicon-th" aria-hidden="true"></span>
									    		</button>
										    							
										     </form>
										     </td>
										     </tr>
										     </tbody>
										    </table>
									    </div>
									  </li>
									  
									</ul>
							';

						}
						

		?>
			</div>
		</div>
		</div>	
	</div>
	</div>
	

</body>

</html>

