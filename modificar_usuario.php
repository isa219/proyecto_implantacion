<?php
session_start();
$tipo = $_SESSION['tipo'];
if ($tipo == 3) {
echo "<html>";
echo "<head>";
echo "</head>";
echo "<body>";
echo "<form action='modificar_usuario_1.php' method='POST'>";
echo "<input type='email' name='correo' placeholder='Correo'><br>";
echo "<input type='text' name='nombre' placeholder='Nombre'>";
echo "<input type='submit' value='Modificar'>";
echo "</form>";
echo "</body>";
echo "</html>";
} else {
	echo "Zona no autorizada";
}
?>