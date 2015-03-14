<?php
//Abrir una conexion con el servidor MySQL
include "conexion.php";
if(isset($_POST['nombre']))
{
    mysqli_query($conexion,"INSERT INTO registro VALUES(NULL,'$_POST[nombre]','$_POST[edad]','$_POST[sexo]')");
    echo "Registro hecho";
}
?>     
<html>
<head>
<title>REGISTRO</title>
</head>
<body>
    <form name="REGISTRO_USU" method="POST" action="practicaregistro.php">
      <h1>REGISTRESE AQUI</h1>
        <label>Nombre: <input type="text" name="nombre" id="nombre" required=""/></label><br />
        <br />
        <label>Edad: <input type="text" name="edad" id="edad" required=""/></label><br />
        <br />
        <label>Sexo: <input type="text" name="sexo" id="sexo" required=""/></label><br />
        <br />
        <button type="submit">ACEPTAR</button> 
        <!-- <a href="http://www.sistemasaplicados.com.mx/index.php">CANCELAR</a>-->
        <a href="http://www.sistemasaplicados.com.mx/index.php"><input type="button" value="CANCELAR"/> </a>
    </form>
</body>
</html>
