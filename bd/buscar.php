<?php
//Se incluye la conexion con la db 
include "conexion.php";

//Si recibo el id que deseo buscar se evalua para proceder con la busqueda del registro
if(isset($_POST['id_buscar']))
{
	//Lanzo la consulta a la tabla para obtener el registro con el id que estoy recibiendo por $_POST
    $consulta = "SELECT * FROM registro WHERE id=$_POST[id_buscar]";
    $resultado = $conexion->query($consulta);
	/*Para obtener el resultado de una consulta se debe aser uso de la funcion fetch la cual tiene dos variantes:
	1.- fetch_assoc() ----> Esta funcion me permite obtener solamente un registro de una consulta, es decir para obtener los datos de un registro en 
	base a un ID esta funcion es la que se debe utilizar
	2.- fetch_assoc() con un ciclo while ----> Esta funcion se utiliza para obtener N cantidad de registros de una consulta, como por ejemplo
	un listado completo de productos, empleados, etc..*/
    $datos = $resultado->fetch_assoc();
	
	/* El resultado del fetch_assoc() es un arreglo para el registro obtenido, por ejemplo para el registro con ID 1:
	---------------------------------
	| id | nombre | edad | sexo     |
	---------------------------------
	|  1 | Ed     | 25   | Masculino|
	---------------------------------
	Su resultado como arreglo seria:
	array("id"=>1,"nombre"=>"Ed","edad"=>25,"sexo"=>"Masculino");
	Para poder comprobar el contenido de este arreglo podemos aplicar la instruccion print_r() a la variable $datos de la sig forma:
	print_r($datos);
	*/
	print_r($datos);
}
?>
<html>
<head>
<title>BUSCAR Y EDITAR</title>
</head>
<body>
<form name="BUSCAR" method="POST" action="buscar.php">
    <h1>BUSCAR REGISTRO</h1>
    <label>Id: <input type="text" name="id_buscar" id="id_buscar" required=""/></label><br />
    <br />
    <button type="submit">BUSCAR</button>
</form>
</body>
</html>

