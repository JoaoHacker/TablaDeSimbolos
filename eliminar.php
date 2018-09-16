<?php

include("Conexion.php");

$id=$_REQUEST['id'];

$query="DELETE FROM tabladesimbolos WHERE id='$id'";
$resultado=$conexion->query($query);

if($resultado){
	header("Location: mostrarTabla.php");

}else{
	echo "Insercion no exitosa";
}


?>