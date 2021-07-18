<?php

//Operadores Aritmeticos

$numero1= 55;
$numero2= 33;

echo "Suma: ".($numero1 +$numero2).'<br/>';
echo "Resta: ".($numero1 - $numero2).'<br/>';
echo "Multiplicación: ".($numero1 * $numero2).'<br/>';
echo "División: ".($numero1 / $numero2).'<br/>';
echo "Resto o módulo: ".($numero1%$numero2).'<br/>';

//Operadores de incremento y decremento

$year = 2020;
++$year;
//$year++;

//$year--;

//++$year;

//--$year;

echo "<h1>".$year."</h1>";

//Operador de asignación

$edad = 55;

echo $edad."<br/>";

// $edad = $edad + 5; esto puede ser con cualquier tipo de operador 
echo ($edad+=5);

        

?>

