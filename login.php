<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/style.css">
<title>a</title>
</head>
<body>
<?php
include "conexion.php";
$conexion=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

$enviado= $_REQUEST["boton"];//mas controles
$email= $_REQUEST["email"];//mas controles

if (!$conexion) {
	die("Conexion fallida: " . mysqli_connect_error());
} else {
	if ($enviado == "Continuar") {
	
	$instruccion1 = "SELECT correo FROM usuario WHERE correo LIKE '$email';";
	$consulta1 = mysqli_query ($conexion,$instruccion1) or die ("Fallo en la consulta de consulta.");
	
	
	// Mostrar resultados de la consulta
	$nfilas = mysqli_num_rows ($consulta1);
	if ($nfilas > 0) {
		echo "<div id='caja_loguear_cuenta'>";
		echo "<span id='cerrar_creando'><a href='index.html' class='enlace'>x</a></span><br>";
		echo "<span id='titulo_logueando'>¡Bienvenido de nuevo!</span><br>";
		echo "<form action='creating_account.php' method='POST'><br>";
		echo "<input type='password' name='password'id='correo_loguear' placeholder='Contraseña'><br>";
		echo "<input type='submit' value='Iniciar sesion' id='loguear_cuenta'><br>";
		echo "</form><br>";
		echo "<span id='tengo_cuenta'><a href='login.html' class='enlace'>Regresar a mi cuenta</a><span><br>";
		echo "</div>";
	} else {
		echo "<div id='caja_crear_cuenta'>";
		echo "<span id='cerrar_creando'><a href='index.html' class='enlace'>x</a></span><br>";
		echo "<span id='titulo_creando'>Crear tu cuenta</span><br>";
		echo "<span id='descripcion_creando'>Por favor, comprueba que el email está bien escrito.<br>Este correo será asociado a tu cuenta y no podrás modificarlo.</span><br>";
		echo "<form action='creating_account.php' method='POST'><br>";
		echo "<input type='text' value='$email' readonly name='email'id='correo_creando'><span id='enlace_creando'><a href='login.html' class='enlace'>Editar</a></span><br>";
		echo "<input type='text' placeholder='Mi nombre' name='name' id='name_creando'><br>";
		echo "<input type='password' placeholder='Contraseña *' id='password_creando'><br>";
		echo "<span id='advertencia_creando'>Utiliza un mínimo de 7 caracteres</span><br>";
		echo "<input type='checkbox' name='politicas' id='politicas_creando'><br>";
		echo "<span id='advertencia_politicas_creando'>Acepto las condiciones de uso y la información básica de Protección de Datos *</span><br>";
		echo "<input type='submit' value='Crear mi cuenta' id='crear_cuenta_creando'><br>";
		echo "</form><br>";
		echo "<span id='ya_tengo_creando'><a href='login.html' class='enlace'>Ya tengo cuenta en Fotocasa</a><span><br>";
		echo "</div>";
	}
	
} else {
	echo "Intruso";
}
}

?>
</body>
</html>