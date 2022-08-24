<?php
$nombre = "ian";
$password = "ian";

if(isset($_GET["enviar_hdn_get"]))
{
    if($nombre == $_GET["nombre_get_txt"] && $password == $_GET["password_get_txt"])
    {
        echo "El Nombre que ingresaste por GET es ".$_GET["nombre_get_txt"].".<br />El password
        que ingresaste por GET es ".$_GET["password_get_txt"].".";
    }
    else
    {
        header("Location: formulario.php?error=si");
    }
}


?>