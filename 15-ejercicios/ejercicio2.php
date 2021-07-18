<?php

/* Escribir un programa que añada valores a un array 
mientras que su longituid sea menor a 120 y luego mostrarlo por pantalla. */

$coleccion = array();

for ($i = 0; $i <120; $i++){
    
    array_push($coleccion, "Huevito de Rey-".$i);
    
}

echo $coleccion[45];
