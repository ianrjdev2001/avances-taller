<?php 
include("sesion.php"); 
?>
<?php 
echo $_SESSION["usuario"]; 
?>
<br /> <br />
Estas en una pagina segura de PHP
<br /> <br />
<a href="archivo-protegido.php">Ir a la primera pagina segura</a>
<br /> <br />
<a href="salir.php">Salir</a>