<?php
$correo= $_REQUEST["correo"];//mas controles
$nombre= $_REQUEST["nombre"];//mas controles

include "conexion.php";
$conexion=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	
	if (!$conexion) {
		die("Conexion fallida: " . mysqli_connect_error());
	} else {
		$instruccion = "SELECT * FROM usuario WHERE correo LIKE '$correo' OR nombres LIKE '$nombre';";
		$consulta = mysqli_query ($conexion,$instruccion) or die ("Fallo en la consulta de consulta.");
		
		// Mostrar resultados de la consulta
		$nfilas = mysqli_num_rows ($consulta);
		
		
		if ($nfilas <> 1) {

			print ("No hay Usuarios. Busque mejor.");
			echo $instruccion;

		}
      else {
			$resultado = mysqli_fetch_array ($consulta);
				echo "<form action='modificar_usuario_2.php' method='POST'>";
				echo "Nombres:<input type='text' name='nombre' value=".$resultado['nombres']."><br>";
				echo "Correo:<input type='text' name='correo' value=".$resultado['correo']."><br>";
				echo "Contraseña:<input type='password' name='password' value=".$resultado['clave']."><br>";
				echo "<input type='number' name='tipo' value=".$resultado['tipo_usuario']."><br>";
				echo "<input type='hidden' name='id' value=".$resultado['usuario_id']."><br>";
				echo "<input type='submit' value='Actualizar' name='actualizar'>";
				echo "</form>";
	  }
	}
// Cerrar 
mysqli_close ($conexion);
?>