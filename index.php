<html>
<head>
<title>Fotocasa.isaac.es: Compra y venta de pisos</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="menu_sup">
<?php
session_start();
$sesion_abierta = $_SESSION['loggin'];
$nombre = $_SESSION['usuario'];
$tipo = $_SESSION['tipo'];
if ( $sesion_abierta == true) {
	if ($tipo == 3) {
		echo "<span id='logo'>≡ fotocasa</span><span id='menu_sup_comprar'><a href='./comprar_piso.php' class='enlace'>Comprar</a></span><span id='menu_sup_vender'><a href='publicar_anuncio.php' class='enlace'>Vender</a></span><span id='menu_sup_admin'><a href='administracion.php' class='enlace'>Administración</a></span><span id='menu_sup_acceder'><a href='logout.php' class='enlace'>👤 $nombre</a></span>";
	} else {
		echo "<span id='logo'>≡ fotocasa</span><span id='menu_sup_comprar'><a href='./comprar_piso.php' class='enlace'>Comprar</a></span><span id='menu_sup_vender'><a href='publicar_anuncio.php' class='enlace'>Vender</a></span><span id='menu_sup_acceder'><a href='logout.php' class='enlace'>👤 $nombre</a></span>";
	}
} else {
	echo "<span id='logo'>≡ fotocasa</span><span id='menu_sup_comprar'><a href='./comprar_piso.php' class='enlace'>Comprar</a></span><span id='menu_sup_vender'><a href='publicar_anuncio.php' class='enlace'>Vender</a></span><span id='menu_sup_acceder'><a href='login.html' class='enlace'>👤Acceder</a></span>";
}
?>
</div>
<div id="fondo">
<div id="menu_cen">
<span id="titulo_menu_cen">Todos tenemos un sito</span><br><br>
<span id="menu_cen_comprar">Comprar</span><br><br>
<form action="pisos.php" method="POST">
<input type="text" placeholder="Busca vivienda en municipio, barrio..." size="30" id="buscar_index" name="busqueda"><input type="submit" value="🔎 Buscar" id="boton_buscar_index">
</form>
</div>
<span id="texto_fondo">Te acompañamos en todo el proceso</span>
</div>
</body>
</html>