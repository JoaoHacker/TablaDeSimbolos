<!DOCTYPE html>
<html>
<!--TablaDeSimbolos JS-->
        <meta charset="utf-8" />

    <head>
        <title>Añadir simbolo</title>
        <center>    
            <br><br><br>
            
      
      <body background="fondo.jpg" style="background-repeat:no-repeat"> 
        <form action="GuardarSimbolo.php" method="POST">
            <font color="white"><h2>Identificador:</h2></font>
            <input type="text" REQUIRED name="Identificador" value="">
            <font color="white"><h2>Tipo:</h2></font>
            <input type="text" REQUIRED name="Tipo" value="">
            <font color="white"><h2>Dimension:</h2></font>
            <input type="text" REQUIRED name="Dimension" value="">
            <font color="white"><h2>Declarada en:</h2></font>
            <input type="text" REQUIRED name="Declarada" value="">
            <font color="white"><h2>Referencias:</h2></font>
            <input type="text" REQUIRED name="Referencias" value=""><br><br>
            <input type="submit" value="Aceptar">
        </form>
        <input type="button" value="enviar" onclick = "location='/TablaDeSimbolos/mostrarTabla.php'"/>
    </body>

</html>