<?php
$nombre= $_REQUEST["nombre"];//mas controles
$correo= $_REQUEST["correo"];//mas controles

include "conexion.php";
$conexion=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if (!$conexion) {
		die("Conexion fallida: " . mysqli_connect_error());
	} else {
		$instruccion1 = "SELECT * FROM usuario WHERE correo LIKE '$correo' OR nombres LIKE '$nombre';";
		$consulta1 = mysqli_query ($conexion,$instruccion1) or die ("Fallo en la consulta de consulta.");
		
		// Mostrar resultados de la consulta
		$nfilas = mysqli_num_rows ($consulta1);
		if ($nfilas == 1) {
			
		$instruccion2 = "DELETE FROM usuario WHERE correo LIKE '$correo' OR nombres LIKE '$nombre';";
		$consulta2 = mysqli_query ($conexion,$instruccion2) or die ("Fallo en la consulta de consulta.");
		echo "Exito";
		} else {
		 print ("No hay Usuarios."); 
	  }
// Cerrar 
mysqli_close ($conexion);
	}

?>