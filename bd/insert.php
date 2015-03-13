<?php
require "conexion.php"; //Aqui ya debes de tener tu variable de conexion con la bd
/* Recibo los valores por post del formulario:
Para acceder a los datos de la variable global $_POST se accede a traves del nombre del campo en el formulario, por ejemplo:
$_POST["nombre"]
*/
$nombre = $_POST["nombre"];
$edad = $_POST["edad"];
$sexo = $_POST["sexo"];
$query = "INSERT INTO mi_tabla VALUES (NULL, '".$nombre."', ".$edad.", '".$sexo."')";
//La variable conexion es la variable que tengo en mi archivo de conexion.php
//la cual se hace global al incluirla en este nuevo archivo php

/* El simbolo -> se usa para acceder a los metodos o variables publicas del objeto en cuestion el cual es $conexion
$conexion tiene todas las funcionalidades necesarias para la implementacion de operaciones con la bd y es con el simbolo ->
con el cual accedemos a dichas funcionalidades

query = Configura el query que quieres ejecutar sobre tu bd de la conexion (el cual puede estar almacenado en una variable 
o bien colocar el el query como un string de manera directa)
insert_id = Obtiene el ultimo id insertado en la bd*/
$conexion->query($query);  //Ejecuto el query
if($conexion->insert_id > 0) //Compruebo si el ultimo registro insertado es mayor a cero quiere decir que se registro en la bd
	echo "Registro insertado exitosamente";
else
	echo "Error al insertar el registro en la tabla";
?>
Codigo HTML de la página web
