<?php
include "conexion.php";

if(isset($_POST['id_buscar']))
{
    $consulta = "SELECT * FROM practicas WHERE id=$_POST[id_buscar]";
    $resultado = $conexion->query($consulta);
    $datos = $resultado->fetch_assoc();
}
?>
<html>
<head>
<title>BUSCAR Y EDITAR</title>
</head>
<body>
<form name="EDITAR_USU" method="POST" action="buscar.php">
    <h1>BUSCAR REGISTRO</h1>
    <label>Id: <input type="text" name="id_buscar" id="id_buscar" required=""/></label><br />
    <br />
    <button type="submit">BUSCAR</button>
</form>

<form name="EDITAR_USU" method="POST" action="editar.php?id=<?php echo $id;?>">
    <h1>ACTUALIZAR DATOS</h1>
    <label>Nombre: <input type="text" name="nombre" id="nombre" required="" value="<?php echo @$datos["nombre"];?>"/></label><br />
    <br />
    <label>Edad: <input type="text" name="edad" id="edad" required="" value="<?php echo @$datos["edad"];?>"/></label><br />
    <br />
    <label>Sexo: <input type="text" name="sexo" id="sexo" required="" value="<?php echo @$datos["sexo"];?>"/></label><br />
    <br />
    <input type="hidden" name="id" value="<?php echo @$datos["id"];?>">
    <button type="submit">ACTUALIZAR</button>
    <a href="http://www.sistemasaplicados.com.mx/index.php"><input type="button" value="CANCELAR"/> </a>
</form>
</body>
</html>
