<?php
session_start();
$id_usuario = $_SESSION['id'];
$id_piso= $_REQUEST["opcion"];//mas controles
include "conexion.php";
$conexion=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	
	if (!$conexion) {
		die("Conexion fallida: " . mysqli_connect_error());
	} else {
		$instruccion1 = "SELECT * FROM pisos WHERE Codigo_piso LIKE '$id_piso';";
		$consulta1 = mysqli_query ($conexion,$instruccion1) or die ("Fallo en la consulta de consulta.");
		$nfilas = mysqli_num_rows ($consulta1);
		if ($nfilas > 0) {
			for ($i=0; $i<$nfilas; $i++) {
				$resultado = mysqli_fetch_array ($consulta1);
				$valor=$resultado['precio'];
				$instruccion2="INSERT INTO comprados VALUES ($id_usuario,$id_piso,$valor);";
			}
		}
		$consulta1 = mysqli_query ($conexion,$instruccion2) or die ("Fallo en la consulta de consulta.");
		$instruccion3 = "DELETE FROM pisos WHERE Codigo_piso LIKE '$id_piso';";
		$consulta3 = mysqli_query ($conexion,$instruccion3) or die ("Fallo en la consulta de consulta.");
		echo "<script>";
		echo "alert('Piso comprado: Enorabuena.');";
		echo "window.history.go(-1);"; // Redirige hacia atrás en la historia del navegador
		echo "</script>";
	}
?>