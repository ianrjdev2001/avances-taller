<?php
function conectarse()
{
    $servidor = "localhost";
    $usuario = "root";
    $password = "root";
    $bd = "mis_contactos";
    
    $conectar = new mysqli($servidor,$usuario,$password,$bd) or die("No se pudo conectar a la base de datos");
    return $conectar;
}

    $conexion = conectarse();

?>