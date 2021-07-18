<?php

/* 
Crear un script php que tenga 4 variables, una de tipo array, string, int y otra booleana y que imprima
 un mensaje segun el tipo de variable que sea.
 */

$string = 'Hot for Teacher';
$array = array('Van Halen');
$int = 1;
$boolean = true;

echo gettype($string)."<br/>";
echo gettype($array)."<br/>";
echo gettype($int)."<br/>";
echo gettype($boolean)."<br/>";

if (is_string($string)) {
    echo "La variable es un string"."<br/>";
}

if (is_array($array)) {
    echo "La variable es un array"."<br/>";
}

if (is_int($int)) {
    echo "La variable es un int"."<br/>";
}

if (is_bool($boolean)) {
    echo "La variable es un boolean"."<br/>";
}