<?php

/* 
Variables locales:Son las que se definen dentro de la función y no pueden ser
 * usadas fuera de la función, solo están disponibles dentro. A no ser que 
 * hagamos un return.
 
 * 
Variables Globales: Son las que se declaran fuera de una función y estan disponible dentro y fuera
 * de las funciones.
 
*/

//Variable global
$frase = "Ni los genios son tan genios, ni los mediocres tan mediocres";

echo $frase;

function holaMundo(){
    global $frase;
    echo "<h1>$frase</h1>";
    
    $year = 2020;
    echo "<h1>$year</h1>";
    
    return $year;
    
}

holaMundo();


//funciones variables

function buenasDias(){
    return "Wena ql";
}

function buenasTardes(){
    return "Su bajoncito???";
}

function buenasNoches(){
    return "A la durma nanoo";
}

$horario = $_GET['horario'];

$miFuncion = "buenas".$horario;

echo $miFuncion();




