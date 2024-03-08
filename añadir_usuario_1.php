<?php
session_start();
$tipo = $_SESSION['tipo'];
if ($tipo == 3) {
echo "<html>";
echo "<head>";
echo "<title>Fotocasa.isaac.es: Compra y venta de pisos</title>";
echo "<meta charset='UTF-8'>";
echo "<link rel='stylesheet' href='css/style.css'>";
echo "</head>";
echo "<body>";
echo "<form action='añadir_usuario.php' method='POST'>";
echo "<input type='text' name='nombre' placeholder='Nombre'>";
echo "<input type='email' name='correo' placeholder='Correo'>";
echo "<input type='password' name='password' placeholder='Password'>";
echo "<select name='opcion'>";
echo "<option value='1'>Comprador</option>";
echo "<option value='2'>Vendedor</option>";
echo "<option value='3'>Administrador</option>";
echo "</select>";
echo "<input type='submit' value='Añadir'>";
echo "</form>";
echo "</body>";
echo "</html>";
} else {
	echo "Zona no autorizada";
}
?>