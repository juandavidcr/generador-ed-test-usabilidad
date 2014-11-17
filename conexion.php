<?php


	$baseDatos ="seme_1_4";
	$password="root";
	$host ="localhost";
	$usuario ="root";		
		@$conectando=mysql_connect($host,$usuario,$password)or die("no se puede conectar a la base de datos");
		@mysql_select_db($baseDatos,$conectando)or die("no se pudo usar la base");
	
		function protect ($v)
		{
			$v = mysql_real_escape_string($v);
			$v = htmlentities($v, ENT_QUOTES);
			$v = trim($v);
			return $v;	
		}
		
		//echo"se a conectado a la base";



	
?>