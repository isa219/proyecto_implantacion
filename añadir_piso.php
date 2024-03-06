<?php
session_start();
$usuario=$_SESSION['id'];
$calle= $_REQUEST["calle"];//mas controles
$numero= $_REQUEST["numero"];//mas controles
$piso= $_REQUEST["piso"];//mas controles
$puerta= $_REQUEST["puerta"];//mas controles
$cp= $_REQUEST["cp"];//mas controles
$metros= $_REQUEST["superficie"];//mas controles
$zona= $_REQUEST["zona"];//mas controles
$precio= $_REQUEST["precio"];//mas controles
$imagen= $_REQUEST["foto"];//mas controles

$fichero_subido = false;
if (is_uploaded_file ($_FILES['foto']['tmp_name']))
      {
         $nombreDirectorio = "./upload/";
         $nombreFichero = $_FILES['foto']['name'];
         $fichero_subido = true;
$nombreCompleto = $nombreDirectorio . $nombreFichero;
 if (is_file($nombreCompleto))
         {
            $idUnico = time();
            $nombreFichero = $idUnico . "-" . $nombreFichero;
         }
}
if ($fichero_subido) {
         move_uploaded_file ($_FILES['foto']['tmp_name'],
         $nombreDirectorio . $nombreFichero);
}

include "conexion.php";
$conexion=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	
	if (!$conexion) {
		die("Conexion fallida: " . mysqli_connect_error());
	} else {
		$instruccion = "INSERT INTO pisos (calle,numero,piso,puerta,cp,metros,zona,precio,imagen,usuario_id) VALUES ('$calle','$numero','$piso','$puerta','$cp','$metros','$zona','$precio','$nombreCompleto',$usuario);";
		//echo $instruccion;
		$consulta = mysqli_query ($conexion,$instruccion) or die ("Fallo en la consulta de consulta.");
		$nfilas = mysqli_num_rows ($consulta);
		if ($nfilas > 0) {
			echo "exito";
		} else {
			echo "<script>";
	echo "alert('Piso añadido');";
	echo "window.history.go(-1);"; // Redirige hacia atrás en la historia del navegador
	echo "</script>";
		}
	}
?>