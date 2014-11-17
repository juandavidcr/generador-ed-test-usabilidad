<?php 


        if(isset($_POST["nombre"],$_POST["identificadorPrueba"])  and $_POST["nombre"]!=""   )
		{
			
			echo "el nuevo nombre de la prueba es  ". $_POST["nombre"]. "y la prueba es ".$_POST["identificadorPrueba"];
			$nombre = $_POST["nombre"];
			$idPrueba = $_POST["identificadorPrueba"];
			include ("conexion.php");			
			mysql_query("UPDATE PruebaUsabildad SET Nombre =  '$nombre'  WHERE idPruebaUsabildad = '$idPrueba' "); // el query de insertar datos a la table proyecto
			header("Location:PruebaUsabilidad.php"); // despues nos regresamos a la pagina principal de proyectos
		}
		else
		{
		
			echo "error en los datos ";
			//header("Location:PruebaUsabilidad.php");
		
		}




?>