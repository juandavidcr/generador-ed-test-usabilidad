<?php 


		
		if(isset($_POST["nombre"],$_POST["tipo"], $_POST["identificadorProyecto"])  and $_POST["nombre"]!="" and $_POST["tipo"]!="") 
		{
		
			echo "el nuevo nombre es  del proyecto es ". $_POST["nombre"]. "y su tipo es ". $_POST["tipo"] ." y el proyecto es ".$_POST["identificadorProyecto"];
			
			$nombre = $_POST["nombre"];
			$tipo = $_POST["tipo"] ;
			$idProyecto = $_POST["identificadorProyecto"];
			include ("conexion.php");			
			mysql_query("UPDATE Proyecto  SET Nombre =  '$nombre' , Tipo = '$tipo'   WHERE idProyecto = '$idProyecto'"); // el query de insertar datos a la table proyecto
			header("Location:Proyecto.php"); // despues nos regresamos a la pagina principal de proyectos
			
		}
		else if(isset($_POST["nombre"],$_POST["identificadorProyecto"]) and $_POST["tipo"]==""  and $_POST["nombre"]!=""   )
		{
			
			echo "el nuevo nombre es  del proyecto es ". $_POST["nombre"];
			$nombre = $_POST["nombre"];
			$idProyecto = $_POST["identificadorProyecto"];
			include ("conexion.php");			
			mysql_query("UPDATE Proyecto  SET Nombre =  '$nombre'  WHERE idProyecto = '$idProyecto'"); // el query de insertar datos a la table proyecto
			header("Location:Proyecto.php"); // despues nos regresamos a la pagina principal de proyectos
		}
		
		 else if(isset($_POST["tipo"],$_POST["identificadorProyecto"]) and $_POST["nombre"]=="" and $_POST["tipo"]!="")
		{
			echo "el nuevo tipo del proyecto es ". $_POST["tipo"];
			$tipo = $_POST["tipo"] ;
			$idProyecto = $_POST["identificadorProyecto"];
			include ("conexion.php");			
			mysql_query("UPDATE Proyecto  SET  Tipo = '$tipo'   WHERE idProyecto = '$idProyecto'"); // el query de insertar datos a la table proyecto
			header("Location:Proyecto.php"); // despues nos regresamos a la pagina principal de proyectos
			
			
			
		}
		else
		{
			echo "error al introducir los datos";
		
		}
		
		 
		
		
		
		
		
		

	
	
	
	?>
