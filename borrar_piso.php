<?php
$calle= $_REQUEST["calle"];//mas controles
$zona= $_REQUEST["zona"];//mas controles

include "conexion.php";
$conexion=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if (!$conexion) {
		die("Conexion fallida: " . mysqli_connect_error());
	} else {
		$instruccion1 = "SELECT * FROM pisos WHERE zona LIKE '$zona' OR calle LIKE '$calle';";
		$consulta1 = mysqli_query ($conexion,$instruccion1) or die ("Fallo en la consulta de consulta.");
		
		// Mostrar resultados de la consulta
		$nfilas = mysqli_num_rows ($consulta1);
		if ($nfilas == 1) {
			
		$instruccion2 = "DELETE FROM pisos WHERE calle LIKE '$calle' OR zona LIKE '$zona';";
		$consulta2 = mysqli_query ($conexion,$instruccion2) or die ("Fallo en la consulta de consulta.");
		echo "Exito";
		} else {
		 print ("No Hay pisos."); 
	  }
// Cerrar 
mysqli_close ($conexion);
	}

?>