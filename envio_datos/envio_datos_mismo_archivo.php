<?php
if(@$_POST) //Evaluo si viene algun dato por post para poder imprimirlo al usuario
{
//*** Recibo los datos del formulario ***
//Para acceder a los datos que vienen del formulario tengo que hacer uso de la variable globla de PHP $_POST, la cual
//me permitira acceder a dichos valores, los cuales los debo acceder como si fuera un arreglo, es decir si quiero
//acceder al campo nombre del formulario debe ser asi: $_POST["nombre"]
//Por eso es importante ponerle la propiedad name al campo de texto ya que es por esta propiedad con la cual podemos
//acceder a cada uno de los elementos del formulario y obtener sus valores
$nombre = $_POST["nombre"] //Almaceno en una variable el dato que tengo en el formulario
echo $nombre; //Imprimo el valor de la variable al usuario
}
?>
<html>
<head>
<title>Envio de datos en PHP</title>
</head>
<body>
<form action="datos.php" method="post">
<label>Nombre</label>
<input type="text" name="nombre">
<label>Edad</label>
<input type="text" name="edad">
<input type="submit" name="enviar" value="Enviar">
</form>
</body>
</html>
