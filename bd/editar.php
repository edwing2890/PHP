<?php
//Abrir una conexion con el servidor MySQL
include "conexion.php";
$id = $_GET["id"]; //Obtengo el id del registro el cual esta en la URL
/* OBTENGO LOS DATOS DEL REGISTRO CON UNA CONSULTA EN BASE A SU ID */
$consulta = "SELECT * FROM registro WHERE id=$id";
$resultado = $conexion->query($consulta);
$datos = $resultado->fetch_assoc();

/* SI RECIBO DATOS POR POST SE PROCEDE A ACTUALIZAR LA INFORMACION DE LO CONTRARIO SOLO SIGUEN MOSTRANDO LOS DATOS OBTENIDOS ANTERIORMENTE */
if(isset($_POST['nombre']))
{
    mysqli_query($conexion,"UPDATE registro SET nombre='$_POST[nombre]',edad='$_POST[edad]',sexo='$_POST[sexo]' WHERE id=$id");
    echo "Registro actualizado";
	/* OBTENGO LOS DATOS DEL REGISTRO DESPUES DE SU ACTUALIZACION PARA MOSTRAR LOS NUEVOS DATOS */
	$consulta = "SELECT * FROM registro WHERE id=$id";
	$resultado = $conexion->query($consulta);
	$datos = $resultado->fetch_assoc();
}
?>     
<html>
<head>
<title>ACTUALIZAR</title>
</head>
<body>
	<a href="select.php"><< REGRESAR AL LISTADO</a>
    <form name="EDITAR_USU" method="POST" action="editar.php?id=<?php echo $id;?>">
      <h1>ACTUALIZAR DATOS</h1>
        <label>Nombre: <input type="text" name="nombre" id="nombre" required="" value="<?php echo $datos["nombre"];?>"/></label><br />
        <br />
        <label>Edad: <input type="text" name="edad" id="edad" required="" value="<?php echo $datos["edad"];?>"/></label><br />
        <br />
        <label>Sexo: <input type="text" name="sexo" id="sexo" required="" value="<?php echo $datos["sexo"];?>"/></label><br />
        <br />
        <button type="submit">ACTUALIZAR</button> 
        <a href="http://www.sistemasaplicados.com.mx/index.php"><input type="button" value="CANCELAR"/> </a>
    </form>
</body>  
</html>
