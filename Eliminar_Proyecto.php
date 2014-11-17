<?php





if(isset($_POST["aqui_solo_pucho"], $_POST["Eliminar_Proyecto"]))
	{
		include ("conexion.php");	
		$idProyecto =  $_POST["Eliminar_Proyecto"];
		
		
				
		echo "el id del proyecto es : ",$idProyecto;	
		mysql_query("DELETE FROM Proyecto WHERE idProyecto = $idProyecto "); // el query de insertar datos a la table proyecto
		header("Location:Proyecto.php"); // despues nos regresamos a la pagina principal de proyectos

	
	}
	else
	{
	
		echo "no entro ";
	}
?>