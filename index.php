<?php
//include ("Hijo_1.php");
//include ("Hijo_2.php");

//echo $A.$B;
//$A = 5;

session_start();
if(isset($_SESSION['admTerm_logged']) ){
  //add_log("Se ha cerrado la sesión del usuario $_SESSION[admTerm_name] $_SESSION[admTerm_lastname]");
  header('Location: Proyecto.php');
} else  
{

include("Vista/login.php");
}

?>