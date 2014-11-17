<?php

	if(isset($_POST["nombre"]) and $_POST["nombre"]!="" ) /** aqui validaremos que los campos del formulario esten llenos **/
	{
	
	session_start();
	include ("conexion.php");
	//echo "el id proyecto es ".$_SESSION['idProyecto'];

	$nombrePrueba = $_POST["nombre"];  //en esta variable recibimos el nombre que llevara la prueba
	$idProyecto = $_SESSION['idProyecto']; // en esta variable recibinos el id del proyecto para poder ponerlo en el querry 
	//echo " tu id es: ". $_SESSION['idproyecto'];
	

		
	
	mysql_query("INSERT INTO PruebaUsabildad(Proyecto_idProyecto,Nombre) VALUES ('$idProyecto','$nombrePrueba')"); // el query de insertar datos a la prueba
	$_SESSION['idProyecto'] =  $idProyecto;
	echo "el valor de nuestra variable session es  ===".$_SESSION['idProyecto'] ; 
	
	
	header("Location:PruebaUsabilidad.php"); // despues nos regresamos a la pagina principal de pruebas
	
	
	
	
	}
	else
	{
		echo"ingrese todo los datos";
		header("Location:PruebaUsabilidad.php");
	}



?>