<?php
//Abrir una conexion con el servidor MySQL
include "conexion.php";
$consulta = "SELECT * FROM registro";
$resultado = $conexion->query($consulta);
$lista = array();
while ($fila = $resultado->fetch_assoc()) 
{
	$lista[] = array("id"=>$fila["id"],"nombre"=>$fila["nombre"],"edad"=>$fila["edad"],"sexo"=>$fila["sexo"]);
}
?>     
<html>
<head>
<title>LISTAR DATOS</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>Nombre</th>
			<th>Edad</th>
			<th>Sexo</th>
			<th>Opciones</th>
		</tr>
		<?php
		foreach($lista as $r)
		{
			echo '<tr>
			<td>'.$r["nombre"].'</td>
			<td>'.$r["edad"].'</td>
			<td>'.$r["sexo"].'</td>
			<td>
				<a href="editar.php?id='.$r["id"].'">Editar</a>&nbsp;
				<a href="eliminar.php?id='.$r["id"].'">Eliminar</a>
			</td>
			</tr>';
		}
		?>
	</table>
</body>
</html>
