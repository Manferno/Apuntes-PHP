<?php

/* 
 Ejercicio 1 hacer un programa en php que tenga un array en 8 numeros enteros y que
 * haga lo siguiente:
 * -Recorrerlo y mostrarlo
 * -Mostrar su longitud
 * -Buscar algun elemento
 * 
 */

$numeros = array(1,2,3,4,5,6,7,8);

foreach ($numeros as $numero){
    echo "<li>$numero</li>";
    
}

echo sizeof($numeros);

echo "<br/>";

echo $numeros[2];