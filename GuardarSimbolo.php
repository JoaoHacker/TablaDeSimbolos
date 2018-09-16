<?php

include("Conexion.php");

$identificador=$_POST['Identificador'];
$tipo=$_POST['Tipo'];
$dimension=$_POST['Dimension'];
$declarada=$_POST['Declarada'];
$referencias=$_POST['Referencias'];

$query="INSERT INTO tabladesimbolos(identificador,tipo,dimension,declarada,referencias) VALUES ('$identificador','$tipo','$dimension','$declarada','$referencias')";



if(mysqli_query($conexion,$query)){
	echo "Insercion exitosa";

}else{
	echo "Error: " . $query . "<br>" . mysqli_error($conexion);

}
?>