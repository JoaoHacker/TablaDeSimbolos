<?php
	
	function conectarDB(){
		$mysqli = new mysqli("localhost", "root", "", "mysql");
		if ($mysqli->connect_errno) {
		    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}else{
			echo "BD conectada";
		}
	}
	
?>