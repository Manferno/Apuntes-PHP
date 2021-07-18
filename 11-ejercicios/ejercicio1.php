<?php

/* 
 Crear dos variables cuyo nombre sea pais y contienente y mostrar, 
 * poner en un comentario que tipo de dato tiene.
 */

$pais = 'Chile';
$continente = 'LatinoAmerica';

echo'Contiente: '.$continente.'<br/>'.'Pais: '.$pais.'<br/>';
echo 'Tipo de variable de continente y pais '.gettype($continente)." y ".gettype($pais);
