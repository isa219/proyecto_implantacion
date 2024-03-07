<?php

include "conexion.php";
$conexion=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	
	if (!$conexion) {
		die("Conexion fallida: " . mysqli_connect_error());
	} else {
		$instruccion = "SELECT * FROM pisos;";
		$consulta = mysqli_query ($conexion,$instruccion) or die ("Fallo en la consulta de consulta.");
		$nfilas = mysqli_num_rows ($consulta);
		if ($nfilas > 0) {
			print ("<TABLE class='tabla_pisos' border='1'>\n");
			print ("<TR>\n");
			print ("<TH>Imagen</TH>\n");
			print ("<TH>Calle</TH>\n");
			print ("<TH>Número</TH>\n");
			print ("<TH>Piso</TH>\n");
			print ("<TH>Puerta</TH>\n");
			print ("<TH>Código Postal</TH>\n");
			print ("<TH>Metros</TH>\n");
			print ("<TH>Zona</TH>\n");
			print ("<TH>Precio</TH>\n");
			print ("</TR>\n");
			for ($i=0; $i<$nfilas; $i++) {
				$resultado = mysqli_fetch_array ($consulta);
				print ("<TR>\n");
				print ("<td class='td_pisos'><img src='" . $resultado['imagen'] . "'></td>\n");
				print ("<td class='td_pisos'>" . $resultado['calle'] . "</td>\n");
				print ("<td class='td_pisos'>" . $resultado['numero'] . "</td>\n");
				print ("<td class='td_pisos'>" . $resultado['piso'] . "</td>\n");
				print ("<td class='td_pisos'>" . $resultado['puerta'] . "</td>\n");
				print ("<td class='td_pisos'>" . $resultado['cp'] . "</td>\n");
				print ("<td class='td_pisos'>" . $resultado['metros'] . "</td>\n");
				print ("<td class='td_pisos'>" . $resultado['zona'] . "</td>\n");
				print ("<td class='td_pisos'>" . $resultado['precio'] . "</td>\n");
				print ("</TR>\n");
			}
			print ("</TABLE>\n");
		} else {
			print ("No hay usuarios."); 
		}
	}

?>