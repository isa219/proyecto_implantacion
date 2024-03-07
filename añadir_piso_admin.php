
<?php
session_start();
$id_usuario=$_SESSION['id'];
$calle= $_REQUEST["calle"];//mas controles
$numero= $_REQUEST["numero"];//mas controles
$piso= $_REQUEST["piso"];//mas controles
$puerta= $_REQUEST["puerta"];//mas controles
$cp= $_REQUEST["cp"];//mas controles
$metros= $_REQUEST["metros"];//mas controles
$zona= $_REQUEST["zona"];//mas controles
$precio= $_REQUEST["precio"];//mas controles
$imagen= $_REQUEST["foto"];//mas controles

include "conexion.php";
$conexion=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);


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



if (!$conexion) {
		die("Conexion fallida: " . mysqli_connect_error());
	} else {
		$instruccion = "INSERT INTO pisos (puerta,calle,numero,piso,cp,metros,zona,precio,imagen,usuario_id) VALUES ($puerta,'$calle',$numero,$piso,$cp,$metros,'$zona',$precio,'$nombreCompleto',$id_usuario);";
		$consulta1 = mysqli_query ($conexion,$instruccion) or die ("Fallo en la consulta de consulta.");
		$nfilas = mysqli_num_rows ($consulta);
		if ($nfilas > 0) {
			echo "No fue exitoso.";
		} else {
		echo "exito";
		}
	}
?>