<!DOCTYPE html>
<html>
<!--TablaDeSimbolos JS-->
        <meta charset="utf-8" />

    <head>
        <title>Añadir simbolo</title>
        <center>    
            <br><br><br>
            
      </center>
    </head>
      <body > 
        <table class="table table-striped">
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
        include("Conexion.php");
        $query= "SELECT * FROM tabladesimbolos";
        $resultado=$conexion->query($query);
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
        ?>
        </table>
        
    </body>

</html>

