<?php
$opcion= $_REQUEST["opcion"];//mas controles
include "conexion.php";
$conexion=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	
	if (!$conexion) {
		die("Conexion fallida: " . mysqli_connect_error());
	} else {
		$instruccion = "SELECT * FROM pisos WHERE Codigo_piso LIKE $opcion;";
		$consulta = mysqli_query ($conexion,$instruccion) or die ("Fallo en la consulta de consulta.");
		
		// Mostrar resultados de la consulta
		$nfilas = mysqli_num_rows ($consulta);
		
		
		if ($nfilas <> 1) {

			print ("No hay Usuarios. Busque mejor.");
			echo $instruccion;

		}
      else {
			$resultado = mysqli_fetch_array ($consulta);
				echo "<form action='modificar_piso_2.php' method='POST' enctype='multipart/form-data'>";
				echo "Calle:<input type='text' name='calle' value=".$resultado['calle']."><br>";
				echo "Número:<input type='number' name='numero' value=".$resultado['numero']."><br>";
				echo "piso: Piso:<input type='number' name='piso' value=".$resultado['piso']."><br>";
				echo "Puerta:<input type='text' name='puerta' value=".$resultado['puerta']."><br>";
				echo "Código Postal:<input type='text' name='cp' value=".$resultado['cp']."><br>";
				echo "Metros:<input type='number' name='metros' value=".$resultado['metros']."><br>";
				echo "Zona:<input type='text' name='zona' value=".$resultado['zona']."><br>";
				echo "Precio:<input type='number' name='precio' value=".$resultado['precio']."><br>";
				echo "Imagen:<input type='file' name='foto' value=".$resultado['imagen']."><br>";
				echo "<input type='submit' value='Modificar'>";
				echo "Imagen:<input type='hidden' name='id' value=".$resultado['Codigo_piso']."><br>";
				echo "</form>";
	  }
	}
// Cerrar 
mysqli_close ($conexion);
?>
