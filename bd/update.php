<?php
require "conexion.php"; //Aqui ya debes de tener tu variable de conexion con la bd
/* Recibo los valores por post del formulario:
Para acceder a los datos de la variable global $_POST se accede a traves del nombre del campo en el formulario, por ejemplo:
$_POST["nombre"]
*/

$nombre = $_POST["nombre"];
$edad = $_POST["edad"];
$sexo = $_POST["sexo"];
$id = $_POST["id"];

$query = "UPDATE mi_tabla SET nombre='".$nombre."' , edad=".$edad.", sexo='".$sexo."' WHERE id=".$id;
//La variable conexion es la variable que tengo en mi archivo de conexion.php
//la cual se hace global al incluirla en este nuevo archivo php
/* El simbolo -> se usa para acceder a los metodos o variables publicas del objeto en cuestion el cual es $conexion
$conexion tiene todas las funcionalidades necesarias para la implementacion de operaciones con la bd y es con el simbolo ->
con el cual accedemos a dichas funcionalidades
query = Configura el query que quieres ejecutar sobre tu bd de la conexion (el cual puede estar almacenado en una variable 
o bien colocar el el query como un string de manera directa)
insert_id = Obtiene el ultimo id insertado en la bd*/
$conexion->query($query);  //Ejecuto el query
if($conexion->affected_rows > 0) //Compruebo si existen registros afectados por la actualizacion, si es asi muestro mensaje
	echo "Registro actualizado exitosamente";
else
	echo "No hay registros afectados en la actualización";
?>

Codigo HTML de la página web
