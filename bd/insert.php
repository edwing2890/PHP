<?php
require "conexion.php"; //Aqui ya debes de tener tu variable de conexion con la bd
$query = "INSERT INTO mi_tabla VALUES (NULL, 'campo1', 'campo2', 'campoN')";
//La variable conexion es la variable que tengo en mi archivo de conexion.php
//la cual se hace global al incluirla en este nuevo archivo php

/* El simbolo -> se usa para acceder a los metodos o variables publicas del objeto en cuestion el cual es $conexion
$conexion tiene todas las funcionalidades necesarias para la implementacion de operaciones con la bd y es con el simbolo ->
con el cual accedemos a dichas funcionalidades

query = Configura el query que quieres ejecutar sobre tu bd de la conexion (el cual puede estar almacenado en una variable 
o bien colocar el el query como un string de manera directa)
insert_id = Obtiene el ultimo id insertado en la bd*/
$conexion->query($query);  
if($conexion->insert_id > 0)
	echo "Registro insertado exitosamente";
else
	echo "Error al insertar el registro en la tabla";
?>
