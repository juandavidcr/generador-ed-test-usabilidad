<?php
echo " entro eliminar prueba ";


if(isset($_POST["aqui_solo_pucho"], $_POST["Eliminar_Prueba"]))
	{
		include ("conexion.php");	
		$idPrueba =  $_POST["Eliminar_Prueba"];
		
		
				
		echo "el id del proyecto es : ",$idPrueba;
		mysql_query("DELETE FROM PruebaUsabildad WHERE idPruebaUsabildad = $idPrueba "); // el query de insertar datos a la table proyecto
		header("Location:PruebaUsabilidad.php"); // despues nos regresamos a la pagina principal de proyectos

	
	}
	else
	{
	
		echo "no entro ";
	}
?>