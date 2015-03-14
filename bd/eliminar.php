<?php
//Abrir una conexion con el servidor MySQL
include "conexion.php";
/* SI RECIBO DATOS POR POST SE PROCEDE A ACTUALIZAR LA INFORMACION DE LO CONTRARIO SOLO SIGUEN MOSTRANDO LOS DATOS OBTENIDOS ANTERIORMENTE */
if(isset($_GET["id"]))
{
    mysqli_query($conexion,"DELETE FROM registro WHERE id=$_GET[id]");
    echo "Registro eliminado";
}
?>     
<html>
<head>
<title>ACTUALIZAR</title>
</head>
<body>
	<a href="select.php"><< REGRESAR AL LISTADO</a>
</body>  
</html>
