<?php 

$email = $_POST["email_txt"];
$nombre = $_POST["nombre_txt"];
$sexo = $_POST["sexo_rdo"];
$nacimiento = $_POST["nacimiento_txt"];
$telefono = $_POST["telefono_txt"];
$pais = $_POST["pais_txt"];

$imagen_generica = ($sexo == "M")?"img/fotos/amigo.png":"img/fotos/amiga.png";

include("conexion.php");

$consulta = "SELECT * FROM contactos WHERE email = '$email'";
$ejecutar_consulta = $conexion->query($consulta);  
$num_regs = $ejecutar_consulta->num_rows; 

if($num_regs == 0)
{
    include("funciones.php");
    $tipo = $_FILES["fotos_fls"]["type"];
    $archivo = $_FILES["fotos_fls"]["tmp_name"];  
    $se_subio_imagen= subir_imagen($tipo,$archivo,$email);
    
    $imagen = empty($archivo)?$imagen_generica:$se_subio_imagen;

    $consulta = "INSERT INTO contactos(email,nombre,sexo,nacimiento,telefono,pais,imagen) VALUES 
    ('$email','$nombre','$sexo','$nacimiento','$telefono','$pais','$imagen')";

    $ejecutar_consulta = $conexion->query($consulta);

    if($ejecutar_consulta)
    {
        $mensaje = "Se dado de alta al contacto con el email<b>$email</b> :)";
    }
    else
    {
        $mensaje = "No se pudo dar de alta el contacto con el email<b>$email</b> :(";
    }
}
else
{
    $mensaje = "No se pudo dar de alta el correo <b>$email</b> porque ya existe :/";
}

$conexion->close();
header("Location: ../index.php?op=alta&mensaje=$mensaje");
?>