<?php

include ("conexion.php");

session_start();
$idPrueba = $_SESSION['idPrueba']  ;

echo "el id prueba es ". $idPrueba;

	if(isset($_POST["pregunta"], $_POST["tiempoOptimo"], $_POST["tiempoAceptable"]) and $_POST["pregunta"]!="" and $_POST["tiempoOptimo"] !="" and $_POST["tiempoAceptable"]  !="") 
	{
		$preguntaCuestionario = $_POST["pregunta"];
		$tiempoOPtimo = $_POST["tiempoOptimo"];
		$tiempoAceptable = $_POST["tiempoAceptable"];
		
		echo "la pregunta es :".$preguntaCuestionario."tiene un tiempo optimo de ".$tiempoOPtimo." un tiempo medio de :".$tiempoAceptable." y un tiempo fallido ".$tiempoFallido;
		
		
		mysql_query("INSERT INTO Cuestionario(PruebaUsabildad_idPruebaUsabildad,Pregunta,Tiempo_Optimo,Tiempo_Acaptable) VALUES ('$idPrueba','$preguntaCuestionario','$tiempoOPtimo','$tiempoAceptable')  ");
			
	    $_SESSION['idPrueba'] = $idPrueba   ;
		header("Location:Cuestionario.php");
		
		
	}
	else
	{
		if(isset($_POST["pregunta"]) and $_POST["pregunta"]!="") {
				$preguntaCuestionario = $_POST["pregunta"];
				$tiempoOPtimo = 0;
				$tiempoAceptable = 0;
				
				echo "la pregunta es :".$preguntaCuestionario."tiene un tiempo optimo de ".$tiempoOPtimo." un tiempo medio de :".$tiempoAceptable." y un tiempo fallido ".$tiempoFallido;
				
				
				mysql_query("INSERT INTO Cuestionario(PruebaUsabildad_idPruebaUsabildad,Pregunta,Tiempo_Optimo,Tiempo_Acaptable) VALUES ('$idPrueba','$preguntaCuestionario','$tiempoOPtimo','$tiempoAceptable')  ");
					
			    $_SESSION['idPrueba'] = $idPrueba   ;
				header("Location:Cuestionario.php");
		}
		echo"ingrese todo los datos";
		header("Location:Cuestionario.php");
	}


	
	?>