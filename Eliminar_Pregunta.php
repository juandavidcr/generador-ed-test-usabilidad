<?php 

session_start();
if( !isset($_SESSION['admTerm_logged']) ){	
	header('Location:./index.php'); 
}
echo "entro esta madre";
if(isset($_POST["aqui_solo_pucho"], $_POST["Eliminar_Pregunta"]))
	{
		include ("conexion.php");	
		$idPregunta =  $_POST["Eliminar_Pregunta"];
		
		
				
		echo "El id del proyecto es : $idPregunta";
		mysql_query("DELETE FROM Cuestionario WHERE idCuestionario = $idPregunta "); // el query de insertar datos a la table proyecto
		header("Location:Cuestionario.php"); // despues nos regresamos a la pagina principal de proyectos

	}
	else
	{
	
		echo "no entro ";
	}

?>