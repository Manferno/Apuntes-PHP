<?php

/* 
 Programa que copruebe si una variable esta vacia y si esta vacia,
 rellenarla con texto en minusculas y mostrarlo en mayusculas y negrita.
 */

$variable = array('lala');

if (empty($variable)) {
    
    echo 'La variable esta vacía';
    array_push($variable, "jesucristo");
    
    echo '<br/>';
    echo "<b>".strtoupper($variable[0])."</b>";
}
else {
    echo 'no lo está';
}


