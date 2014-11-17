<?php


	
	if(isset($_POST["nombre"],$_POST["tipo"]) and $_POST["nombre"]!="" and $_POST["tipo"]!="") /** aqui validaremos que los campos del formulario esten llenos **/
	{
	
	session_start();
	include ("conexion.php");

	$nombreProyecto = $_POST["nombre"];  //en esta variable recibimos el nombre que llevara el proyecto 
	$tipoProyecto = $_POST["tipo"];		//en esta variable recibimos el nombre que llevara el proyecto 
	$idUsuario = $_SESSION['idUsuarioSession']; // en esta variable recibinos el id del usuario para poder ponerlo en el querry 
	//echo " tu id es: ". $_SESSION['idproyecto'];
	
	echo "el nombre del proyecto es: ",$nombreProyecto," y su tipo es:  ",$tipoProyecto, " y el id del usuario es ",$idUsuario;
	$query = "INSERT INTO Proyecto(Usuario_idUsuario,Nombre,Tipo) VALUES ('$idUsuario','$nombreProyecto','$tipoProyecto')";
	
	echo "\n$query";

	mysql_query($query); // el query de insertar datos a la table proyecto
	header("Location:Proyecto.php"); // despues nos regresamos a la pagina principal de proyectos
	
	
	
	}
	else
	{
		echo"ingrese todo los datos";
		header("Location:Proyecto.php");
	}
?>