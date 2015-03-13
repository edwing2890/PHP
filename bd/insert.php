<?php
require "conexion.php"; //Aqui ya debes de tener tu variable de conexion con la bd
$query = "INSERT INTO mi_tabla VALUES (NULL, 'campo1', 'campo2', 'campoN')";
//La variable conexion es la variable que tengo en mi archivo de conexion.php
//la cual se hace global al incluirla en este nuevo archivo php
$conexion->query($query);  
if($conexion->insert_id > 0)
	echo "Registro insertado exitosamente";
else
	echo "Error al insertar el registro en la tabla";
?>
