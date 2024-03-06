<html>
<head>
<title>Fotocasa.isaac.es: Compra y venta de pisos</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
$busqueda= $_REQUEST["busqueda"];//mas controles
include "conexion.php";
$conexion=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	
	if (!$conexion) {
		die("Conexion fallida: " . mysqli_connect_error());
	} else {
		$instruccion = "SELECT * FROM pisos WHERE calle LIKE '%$busqueda%' OR zona LIKE '%$busqueda%';";
		$consulta = mysqli_query ($conexion,$instruccion) or die ("Fallo en la consulta de consulta.");
		$nfilas = mysqli_num_rows ($consulta);
		if ($nfilas > 0) {
			print ("<TABLE border='1'>\n");
			print ("<TR>\n");
			print ("<TH>Imagen</TH>\n");
			print ("<TH>Precio</TH>\n");
			print ("<TH>Calle</TH>\n");
			print ("<TH>Número</TH>\n");
			print ("<TH>Codigo Postal</TH>\n");
			print ("<TH>Zona</TH>\n");
			print ("<TH>Piso</TH>\n");
			print ("<TH>Puerta</TH>\n");
			print ("<TH>Metros</TH>\n");
			print ("</TR>\n");
			for ($i=0; $i<$nfilas; $i++) {
				$resultado = mysqli_fetch_array ($consulta);
				print ("<TR>\n");
				print ("<td><img src='" . $resultado['imagen'] . "'></td>\n");
				print ("<td>" . $resultado['precio'] . "</td>\n");
				print ("<td>" . $resultado['calle'] . "</td>\n");
				print ("<td>" . $resultado['numero'] . "</td>\n");
				print ("<td>" . $resultado['cp'] . "</td>\n");
				print ("<td>" . $resultado['zona'] . "</td>\n");
				print ("<td>" . $resultado['piso'] . "</td>\n");
				print ("<td>" . $resultado['puerta'] . "</td>\n");
				print ("<td>" . $resultado['metros'] . "</td>\n");
				print ("</TR>\n");
			}
			print ("</TABLE>\n");
		} else {
			print ("No hay Usuarios."); 
		}
}
?>

</body>
</html>
