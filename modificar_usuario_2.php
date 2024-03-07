<?php
$correo= $_REQUEST["correo"];//mas controles
$nombre= $_REQUEST["nombre"];//mas controles
$password= $_REQUEST["password"];//mas controles
$tipo= $_REQUEST["tipo"];//mas controles
$id= $_REQUEST["id"];//mas controles

include "conexion.php";
$conexion=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	
	if (!$conexion) {
		die("Conexion fallida: " . mysqli_connect_error());
	} else {
		$query = "UPDATE usuario SET nombres = '$nombre', correo = '$correo', clave = '$password',tipo_usuario = $tipo WHERE usuario_id='$id';";
if(mysqli_query($conexion,$query))
{
    echo "<script>";
	echo "alert('Bien');";
	header('Location: ./modificar_usuario.html'); 
	echo "</script>";
}
else
{
    echo "<script>";
	echo "alert('Bien');";
	header('Location: ./modificar_usuario.html'); 
	echo "</script>";
}
	}
?>