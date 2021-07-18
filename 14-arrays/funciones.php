<?php

$bandas = ['Twice', 'Gorillaz', 'Metallica' , 'ABBA'];
$numeros = [1,5,7,2,8,3];

//ordenar  sort y asort
sort($numeros);
var_dump($numeros);

//Añadir elementos array

$bandas[] = "BLACKPINK";
array_push($bandas, "Velvet Underground");


//eliminar elementos de array
array_pop($bandas); //quita el ultimo indice
unset($bandas[2]);


//aleatorio

$indice = array_rand($bandas);
echo $bandas[$indice];
//dar vuelta un array

var_dump(array_reverse($numeros));

//buscar dentro de un array
$resultado = array_search('ABBA', $bandas);
var_dump($resultado);

//contar numero de elementos

echo sizeof($bandas);