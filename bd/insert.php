<?php
include "conexion.php";
if(@$_POST)
{
    mysqli_query($conexion,"INSERT INTO practicas values(NULL,'".$_POST["nombre"]."',".$_POST["edad"].",'".$_POST["sexo"]."')");
    echo "Registro hecho";
}
?>
<html>
    <title>Insert</title>
    <body>
        <form action="insert.php" method="post">
            <label>Nombre</label>
            <input type="text" name="nombre">
            <label>Edad</label>
            <input type="text" name="edad">
            <label>Sexo</label>
            <input type="text" name="sexo">
            <input type="submit" name="enviar" value="Registrar">
        </form>
    </body>
</html>
