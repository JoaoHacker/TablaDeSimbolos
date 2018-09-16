<!DOCTYPE html>
<html>

        <meta charset="utf-8" />

    <head>
        <title>Buscar simbolo</title>
        <center>    
            <br><br><br>
            
      </center>
    </head>
      <body > 
      	<?php

		include("Conexion.php");

		$identificador=$_POST['Buscar'];

		$query="SELECT * FROM tabladesimbolos WHERE identificador='$identificador'";
		$resultado=$conexion->query($query);

		if($resultado){
			?>

			<table class="table table-striped" border="3">
        <thead>
        <tr>
            <th>ID</th>
            <th>IDENTIFICADOR</th>
            <th>TIPO</th>
            <th>DIMENSIÓN</th>
            <th>DECLARADA EN</th>
            <th>REFERENCIADA EN</th>
            
        </tr>
        </thead>

        <?php
        
       
        while($row=$resultado->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><center><?php echo $row['identificador']; ?></center></td>
            <td><center><?php echo $row['tipo']; ?></center></td>
            <td><center><?php echo $row['dimension']; ?></center></td>
            <td><center><?php echo $row['declarada']; ?></center></td>
            <td><center><?php echo $row['referencias']; ?></center></td>
            
        </tr>   
       
        <?php
                }
           }
        ?>
        </table>
        
    </body>

</html>