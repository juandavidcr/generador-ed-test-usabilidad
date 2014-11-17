<?php

include ("conexion.php");

session_start();
$idPrueba = $_SESSION['idPrueba']  ;


if (isset($_POST["a"]))
{
	$pregunta_a = $_POST["a"];
	$tiempoA = 15;
	$tiempoB = 20;
	
	
	agregarAbase($idPrueba,$pregunta_a,$tiempoA,$tiempoB);
	
}
if (isset($_POST["b"]))
{
	$pregunta_b = $_POST["b"];
	$tiempoA = 154;
	$tiempoB = 240;
	agregarAbase($idPrueba,$pregunta_b,$tiempoA,$tiempoB);
}
if (isset($_POST["c"]))
{
	$pregunta_c = $_POST["c"];
	$tiempoA = 1544;
	$tiempoB = 2404;
	agregarAbase($idPrueba,$pregunta_c,$tiempoA,$tiempoB);
}



if (isset($_POST["d"]))
{
	$pregunta_d = $_POST["d"];
	$tiempoA = 1;
	$tiempoB = 2;
	agregarAbase($idPrueba,$pregunta_d,$tiempoA,$tiempoB);
}

header("Location:Cuestionario.php");

function agregarAbase($idPrueba,$preguntaCuestionario,$tiempoOPtimo,$tiempoAceptable)
{
	//echo "la pregunta es :".$preguntaCuestionario."tiene un tiempo optimo de ".$tiempoOPtimo." un tiempo medio de :".$tiempoAceptable;
	
	
	mysql_query("INSERT INTO Cuestionario(PruebaUsabildad_idPruebaUsabildad,Pregunta,Tiempo_Optimo,Tiempo_Acaptable) VALUES ('$idPrueba','$preguntaCuestionario','$tiempoOPtimo','$tiempoAceptable')  ");
			
		  $_SESSION['idPrueba']  = $idPrueba  ;
			header("Location:Cuestionario.php");

}








?>