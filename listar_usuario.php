<?php
session_start();
$tipo = $_SESSION['tipo'];
if ($tipo == 3) {
include "conexion.php";
$conexion=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	
	if (!$conexion) {
		die("Conexion fallida: " . mysqli_connect_error());
	} else {
		$instruccion = "SELECT * FROM usuario;";
		$consulta = mysqli_query ($conexion,$instruccion) or die ("Fallo en la consulta de consulta.");
		$nfilas = mysqli_num_rows ($consulta);
		if ($nfilas > 0) {
			print ("<TABLE class='tabla_pisos' border='1'>\n");
			print ("<TR>\n");
			print ("<TH>Nombres</TH>\n");
			print ("<TH>Correo</TH>\n");
			print ("<TH>Clave</TH>\n");
			print ("<TH>tipo_usuario</TH>\n");
			print ("</TR>\n");
			for ($i=0; $i<$nfilas; $i++) {
				$resultado = mysqli_fetch_array ($consulta);
				print ("<TR>\n");
				print ("<td class='td_pisos'>" . $resultado['nombres'] . "</td>\n");
				print ("<td class='td_pisos'>" . $resultado['correo'] . "</td>\n");
				print ("<td class='td_pisos'>" . $resultado['clave'] . "</td>\n");
				print ("<td class='td_pisos'>" . $resultado['tipo_usuario'] . "</td>\n");
				print ("</TR>\n");
			}
			print ("</TABLE>\n");
		} else {
			print ("No hay usuarios."); 
		}
	}
} else {
	echo "Zona no autorizada";
}
?>