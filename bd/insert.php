<?php //Estaba equivocado el inicio del codigo PHP debe ser <?php en vez de ?php
//Abrir una conexion con el servidor MySQL
include "conexion.php";
/*Debe ser en vez de isset($_POST) @$_POST ya que cuando aplicas el isset tiende a macar 
advertencias sobre el codigo o hay ocasiones en las que entra al if cuando no hemos mandado datos
por post asi que mejor te recomiendo uses esta instruccion */
if(@$_POST)   
{
    /*  * El NULL va sin comillas (ese fue error mio perdon jeje ^.^)
        * El $_POST de edad va sin comillas sencillas ya que no es un string, aunque con las comillas tambien funcione debes ponerlo de forma correcta osea sin comillas 
        * En el $_POST[edad] te faltaron las comillas, recuerda q para acceder a un campo es con comillas, es decir $_POST["edad"]
        * NOTA: Tal vez te confundiste con la cuestion de que como no es string no lleva comillas pero en este caso no nos interesa la propiedad lo unico que
            queremos es acceder al valor del campo edad, asi que todos los post van con comillas 
        **PD: No tires la toalla, tu puedes eres una persona muy capaz y de eso jamas he tenido duda, la respuesta no esta en desesperarse sino
        en como le daremos solucion a la problematica, siempre estare ahi para apoyarte ^.^
     */
    mysqli_query($conexion,"INSERT INTO practicas values(NULL,'".$_POST["nombre"]."',".$_POST["edad"].",'".$_POST["sexo"]."')");
    echo "Registro hecho";    
}
?>        
<html>
<head>
<title>REGISTRO</title>
</head>
  
    <form name="REGISTRO_USU" method="POST" action="practicaregistro.php">
      <body style="background: #80FF00;">
    
      <h1>REGISTRESE AQUI</h1>
        <label>Nombre: <input type="text" name="nombre" id="nombre" required=""/></label><br />
        <br />
        <label>Edad: <input type="text" name="edad" id="edad" required=""/></label><br />
        <br />
        <label>Sexo: <input type="text" name="sexo" id="sexo" required=""/></label><br />
        <br />
        <button type="submit">ACEPTAR</button> 
        <a href="http://www.sistemasaplicados.com.mx/index.php"><input type="button" value="CANCELAR"/> </a>
      </body>  
    </form>

</html>

