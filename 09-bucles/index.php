<?php

/*
 Bucle While
 Estructura de control que itera o repite la ejecución de una serie de
 instrucciones tantas veces como sea necesario, en base a una condición.
 while (condition){
    bloque de instrucciones
    
}
 */

$numero = 0;

while ($numero <= 100) {
    echo '<p>'.$numero.'</p>';
    $numero++;
}


// Tabla de multiplicar 

echo '<hr>';

if (isset($_GET['numero'])) {
    $numero = $_GET['numero'];
} else {
   $numero = 3;    
}

var_dump($numero);

echo "<h1>Tabla de multiplicar del numero $numero </h1>";

$contador = 0;

while ($contador<=10) {
    
    echo "$numero x $contador = ". ($numero*$contador)."<br/>";
    $contador++;
    
}

//DO WHILE

/*do {
    //bloque de instrucciones
    
} while (condición);
 * 
 */

$edad = 18;
$contador = 1;
do {
    echo'tienes acceso a pornhub';
    $contador ++;
    
} while ($edad>=18 && $contador <=10);
