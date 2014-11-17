<?php
session_start();
include ("conexion.php"); // aqui nos conectamos a la base de datos  que se encuentra en el archivo conexion.php



if(isset($_POST["nombre"],$_POST["pass"]) and $_POST["nombre"]!="" and $_POST["pass"]!="")  /** aqui validaremos que los campos del formulario esten llenos **/
	{

		
		
		$nombreUsuario = protect ($_POST["nombre"]);  // creamos unas variables donde le asignamos el valor que nos llego del formulario y son del tipo protect para la seguridad 
		$passUsuario = protect ($_POST["pass"]);	 // creamos unas variables donde le asignamos el valor que nos llego del formulario y son del tipo protect para la seguridad 
		
			//echo "el nombre del	Usuario es: ",$nombreUsuario," \n la contraseña del usuario es :  ",$passUsuario;
		
		
		$consulta= mysql_query(" SELECT * FROM usuario WHERE Nombre = '$nombreUsuario' AND Pass = '$passUsuario'",@$conectando ); /* creamos nuestra consulta 
				la cual validaran que los datos enviados esten en la base de datos */
		$array_consulta= mysql_fetch_array($consulta); // aqui pasamos nuestra consulta a un arreglo para poder ocupar los valores en un echo 
	
		if($array_consulta == false)  // si no se encontro un usuario con  esa contraseña nos mandara un mensaje de usario no encontrado 

		{
				echo "usuario no enecontrado en nuestra base de datos";
				header("Location:index.php"); 
		}
		else // si se encontro al usuario le mandamos un mensaje de bienvenida 
		{	
				echo "bienvenido al regristro ".$array_consulta["Nombre"];
				//$guardarId = $array_consulta['idUsuario'];
				//
				$_SESSION['idUsuarioSession'] = $array_consulta['idUsuario'];	// creamos nuestra super-variable  la cual nos guardara el id del usuario 
				$_SESSION['admTerm_logged'] = true;																// para futuras consultas 
				
				echo " tu id es: ". $_SESSION['idUsuarioSession'];
				
				
				header("Location:Proyecto.php");  // y despues de logearnos nos dirigimos a el archivo proyecto 
		}		
	}
	else
	{
			echo"Ingrese todo los datos";
			header("Location:index.php"); 
	}	
	

?>