<html>
<head>
<title>Fotocasa.isaac.es: Compra y venta de pisos</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
session_start();
$tipo = $_SESSION['tipo'];
if ($tipo == 3) {
	echo "<table border='1'>";
	echo "<tr>";
	echo "<td class='tabla_admin'>Usuarios</td>";
	echo "<td class='tabla_admin'><a href='añadir_usuario_1.php' class='enlace'>Añadir</a></td>";
	echo "<td class='tabla_admin'><a href='listar_usuario.php' class='enlace'>Listar</a></td>";
	echo "<td class='tabla_admin'><a href='modificar_usuario.php' class='enlace'>Modificar</a></td>";
	echo "<td class='tabla_admin'><a href='buscar_usuario_1.php' class='enlace'>Buscar</a></td>";
	echo "<td class='tabla_admin'><a href='borrar_usuario_1.php' class='enlace'>Borrar</a></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td class='tabla_admin'>Pisos</td>";
	echo "<td class='tabla_admin'><a href='añadir_piso.html' class='enlace'>Añadir</a></td>";
	echo "<td class='tabla_admin'><a href='listar_piso.php' class='enlace'>Listar</a></td>";
	echo "<td class='tabla_admin'><a href='modificar_piso.php' class='enlace'>Modificar</a></td>";
	echo "<td class='tabla_admin'><a href='buscar_piso.html' class='enlace'>Buscar</a></td>";
	echo "<td class='tabla_admin'><a href='borrar_piso.html' class='enlace'>Borrar</a></td>";
	echo "</tr>";
	echo "<table>";
} else {
	echo "Zona no autorizada";
}
?>
</body>
</html>