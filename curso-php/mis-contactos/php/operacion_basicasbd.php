<?php
    $conexion = mysqli_connect("localhost:8889","root","root") or die("No se pudo Conectar con el servidor de BD");

    mysqli_select_db($conexion,"mis_contactos") or die ("No se pudo seleccionar la BD 'mis_contactos'"); 
echo "BD Seleccionada: <b>'mis_contactos'</b> <br/ > ";
echo "<h1>4 Operaciones Basicas</h1>";
echo "<h2>1) Insercion</h2>";

$consulta = "INSERT INTO contactos(
    email,nombre,sexo,nacimiento,telefono,pais,imagen) VALUES (
        'iaf_sefse@hotmail.com','Ian','M','2001-06-19','23713','Mexico','ian.png')";

//$ejecutar_consulta = mysqli_query($conexion,$consulta) or die ("No se ejecuto la consulta");
//echo "Se ejecuto la consulta <br/ >";

echo "<h2>2) Eliminacion</h2>";
$consulta = "DELETE FROM contactos WHERE email = 'iaf_sefse@hotmail.com'"; 

//$ejecutar_consulta = mysqli_query($conexion,$consulta) or die ("No se elimino la consulta");
echo "Se Elimino la consulta <br/ >";

echo "<h2>3) Modificacion</h2>";
$consulta = "UPDATE contactos SET email = 'manuelsefse@hotmail.com', nombre = 'Manuel', imagen = 'manuel.png'
WHERE email = 'iaf_sefse@hotmail.com'";

$ejecutar_consulta = mysqli_query($conexion,$consulta) or die ("No se Modifico la consulta");
echo "Se Modifico la consulta <br/ >";

echo "<h2>4) Consulta</h2>";
$consulta = "SELECT * FROM contactos";
$ejecutar_consulta = mysqli_query($conexion,$consulta);
echo "<h2>Consulta que muestra los registros</h2>";

while($registro = mysqli_fetch_array($ejecutar_consulta))
{
    echo $registro["email"]."---";
    echo $registro["nombre"]."---";
    echo $registro["sexo"]."---";
    echo $registro["nacimiento"]."---";
    echo $registro["telefono"]."---";
    echo $registro["pais"]."---";
    echo $registro["imagen"]."---";
}


$consulta = "SELECT * FROM contactos WHERE nombre = 'Manuel'";
$ejecutar_consulta = mysqli_query($conexion,$consulta);
echo "<h2>Consulta que muestra los registros con el nombre Manuel</h2>";

while($registro = mysqli_fetch_array($ejecutar_consulta))
{
    echo $registro["email"]."---";
    echo $registro["nombre"]."---";
    echo $registro["sexo"]."---";
    echo $registro["nacimiento"]."---";
    echo $registro["telefono"]."---";
    echo $registro["pais"]."---";
    echo $registro["imagen"]."---";
}

$consulta = "SELECT * FROM contactos WHERE nombre = 'Ian' AND email = 'iaf.sefse@hotmail.com'";
$ejecutar_consulta = mysqli_query($conexion,$consulta);
echo "<h2>Consulta que muestra los registros con el nombre Ian y el email ian.adasd</h2>";

while($registro = mysqli_fetch_array($ejecutar_consulta))
{
    echo $registro["email"]."---";
    echo $registro["nombre"]."---";
    echo $registro["sexo"]."---";
    echo $registro["nacimiento"]."---";
    echo $registro["telefono"]."---";
    echo $registro["pais"]."---";
    echo $registro["imagen"]."---";
}
echo "<br/ >";
mysqli_close($conexion) or die("Ocurrio un error al cerrar la conexion");
echo "Conexion cerrada";
?>