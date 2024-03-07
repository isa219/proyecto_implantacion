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
echo "<span id='logo'>≡ fotocasa</span><span id='menu_sup_comprar'><a href='./comprar_piso.php' class='enlace'>Comprar</a></span><span id='menu_sup_vender'><a href='publicar_anuncio.php' class='enlace'>Vender</a></span><span id='menu_sup_admin'><a href='administracion.php' class='enlace'>Administración</a></span><span id='menu_sup_acceder'><a href='logout.php' class='enlace'>👤 $nombre</a></span>";
echo "<table border='1'>";
echo "<tr>";
echo "<td class='tabla_admin'>Usuarios</td>";
echo "<td class='tabla_admin'><a href='añadir_usuario.html' class='enlace'>Añadir</a></td>";
echo "<td class='tabla_admin'><a href='listar_usuario.php' class='enlace'>Listar</a></td>";
echo "<td class='tabla_admin'><a href='modificar_usuario.html' class='enlace'>Modificar</a></td>";
echo "<td class='tabla_admin'><a href='buscar_usuario.html' class='enlace'>Buscar</a></td>";
echo "<td class='tabla_admin'><a href='borrar_usuario.html' class='enlace'>Borrar</a></td>";
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
?>
</body>
</html>