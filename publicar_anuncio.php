<html>
<head>
<title>Fotocasa.isaac.es: Compra y venta de pisos</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
session_start();
$sesion_abierta = $_SESSION['loggin'];
$tipo = $_SESSION['tipo'];
if ($sesion_abierta == true) {
	if ($tipo == 2) {
		echo "<span id='titulo_anuncio'>Características básicas</span><br>";
		echo "<span id='precio_anuncio_titulo'>Precio de venta</span><br>";
		echo "<form action='añadir_piso.php' method='POST' enctype='multipart/form-data'><br>";
		echo "<input type='number' name='precio'id='precio_anuncio' placeholder='Precio de venta                             €'><br>";
		echo "<span id='dudas_anuncio'>¿Dudas con el precio? <span id='dudas_anuncio_enlace'><a href='login.html' class='enlace'>Valoración online gratis</a></span></span><br>";
		echo "<span id='superficie_anuncio_titulo'>Superficie</span><br>";
		echo "<input type='number' placeholder='Superficie                                   m2' name='superficie' id='superficie_anuncio'><br>";
		echo "<span id='numero_anuncio_titulo'>Número</span><span id='piso_anuncio_texto'>Piso</span><br>";
		echo "<input type='number' placeholder='Número' id='numero_anuncio' name='numero'><input type='number' placeholder='Piso' id='piso_anuncio' name='piso'><br>";
		echo "<span id='puerta_anuncio_titulo'>Puerta</span><span id='codigo_anuncio_texto'>Código Postal</span><br>";
		echo "<input type='text' placeholder='	Puerta' id='puerta_anuncio' name='puerta'><input type='number' placeholder='Código Postal' id='codigo_anuncio' name='cp'><br>";
		echo "<span id='direccion_anuncio_titulo'>Dirección del inmueble</span><br>";
		echo "<input type='text' placeholder='Calle' id='calle_anuncio' name='calle'><br>";
		echo "<input type='text' placeholder='Zona' id='zona_anuncio' name='zona'><br>";
		echo "<span id='foto_anuncio_titulo'>Fotos de tu anuncio</span><br>";
		echo "<input type='file' name='foto' id='foto_anuncio'><br>";
		echo "<input type='submit' value='Continuar' id='crear_anuncio'>";
		echo "</form><br>";	
	} else {
		echo "Solo pueden acceder los vendedores.";
	}
} else {
	header('Location: ./login.html'); 
}

?>
</body>
</html>