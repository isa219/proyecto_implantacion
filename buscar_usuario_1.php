<?php
session_start();
$tipo = $_SESSION['tipo'];
if ($tipo == 3) {
echo "<html>";
echo "<head>";
echo "</head>";
echo "<body>";
echo "<form action='buscar_usuario.php' method='POST'>";
echo "<input type='text' name='nombre' placeholder='Nombre'><br>";
echo "<input type='email' name='correo' placeholder='Correo'><br>";
echo "<input type='submit' value='Buscar'>";
echo "</form>";
echo "</body>";
echo "</html>";
} else {
	echo "Zona no autorizada";
}
?>