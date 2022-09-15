<?php

$conexion = mysqli_connect("localhost:8889","root","root") or die("No se pudo Conectar con el servidor de BD");
echo "Estoy Conectado a MySQL <br/ >";

mysqli_select_db($conexion,"mis_contactos") or die ("No se pudo seleccionar la BD 'mis_contactos'"); 
echo "BD Seleccionada: 'mis_contactos' <br/ > ";

$consulta = "SELECT * FROM pais";

$ejecutar_consulta = mysqli_query($conexion,$consulta) or die ("No se ejecuto la consulta");
echo "Se ejecuto la consulta <br/ >";

while($registro = mysqli_fetch_array($ejecutar_consulta))
{
    echo $registro["id_pais"]." - ".$registro["pais"]."<br/ >"; 
}

mysqli_close($conexion) or die("Ocurrio un error al cerrar la conexion");
echo "Conexion cerrada";
?>