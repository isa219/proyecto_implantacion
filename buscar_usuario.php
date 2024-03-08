<?php
session_start();
$tipo = $_SESSION['tipo'];
if ($tipo == 3) {
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
			print ("<TABLE id='tabla_listar_tareas' border='0'>\n");
			print ("<TR>\n");
			print ("<TH>Nombres:</TH>\n");
			print ("<TH>Correo:</TH>\n");
			print ("<TH>Contraseña:</TH>\n");
			print ("<TH>Tipo</TH>\n");
			print ("</TR>\n");
			for ($i=0; $i<$nfilas; $i++) {
				$resultado = mysqli_fetch_array ($consulta1);
				print ("<TR>\n");
				print ("<TD>" . $resultado['nombres'] . "</TD>\n");
				print ("<TD>" . $resultado['correo'] . "</TD>\n");
				print ("<TD>" . $resultado['clave'] . "</TD>\n");
				print ("<TD>" . $resultado['tipo_usuario'] . "</TD>\n");
				print ("</TR>\n");
			}
			print ("</TABLE>\n");

		}
      else {
		 print ("No hay Usuarios."); 
	  }
// Cerrar 
mysqli_close ($conexion);
	}
} else {
	echo "Zona no autorizada";
}
?>