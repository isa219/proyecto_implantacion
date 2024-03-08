<?php
$calle= $_REQUEST["calle"];//mas controles
$numero= $_REQUEST["numero"];//mas controles
$piso= $_REQUEST["piso"];//mas controles
$cp= $_REQUEST["cp"];//mas controles
$metros= $_REQUEST["metros"];//mas controles
$zona= $_REQUEST["zona"];//mas controles
$precio= $_REQUEST["precio"];//mas controles
$puerta= $_REQUEST["puerta"];//mas controles
$foto= $_REQUEST["foto"];//mas controles
$id= $_REQUEST["id"];//mas controles

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
		$query = "UPDATE pisos SET calle = '$calle', numero = $numero, piso = $piso, puerta = '$puerta', cp = $cp, metros = $metros, zona = '$zona', precio = $precio, imagen = '$nombreCompleto'WHERE Codigo_piso=$id;";
if(mysqli_query($conexion,$query))
{
    echo "<script>";
	echo "alert('Bien');";
	echo "</script>";
}
else
{
    echo "mal";
	echo $query;
	echo $calle;
	echo "<br>";
	echo $puerta;
	}
	}
?>