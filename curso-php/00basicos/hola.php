<?php
//imprimiendo en pantalla
echo "Hola mundo";
echo "Hola mundo <br />estoy <h1> aprendiendo PHP</h1>";
//variables
$nombre = "Jonathan";
$Nombre = "Ulises";
//concatenacion
echo $nombre." ".$Nombre;
echo "<br / >";
//Variables

$num1 = 5;
$num2 = 78;

$suma = $num1 + $num2;

echo $suma;
echo "<br />La variable \$suma tiene el valor de $suma";

$modulo = $num2 % 2;

echo "<br />";
if($modulo == 0)
{
    echo "El numero es par";
}
else
{
    echo "El numero es inpar";
}
echo "<br />";

for($i = 0; $i <= 10; $i++)
{
    echo $i."<br />"; 
}
?>
