<?php

/* Condicionales
  IF:
 * if(condicion){ 
  instrucciones
  }
  else {
  otras instrucciones
  }
 */

/* Operadores de comparación
  == igual
  === identico
  != distinto
  <> diferente
  !== no identico
  <  menor que
  >  mayor que
  <=  menor o igual que
  >=  mayor o igual que

 * Operadores Logicos
 * && AND Y
 * || OR O
 * ! NOT NO
 * and, or 
 */
//ej 1
$color = 'rojo';

if ($color == "rojo") {
    echo 'El color es rojo';
} else {
    echo 'no es rojo';
}

//ej 2
echo '<hr>';

$dia = '1';
/*
  if ($dia=='1') {

  echo'Es lunes';
  }

  else {
  if ($dia == '2') {
  echo 'Es martes';
  }
  else {
  echo 'No es niuna wea';
  }
  }
 */

if ($dia == '1') {
    echo 'Es lunes';
} elseif ($dia == '2') {
    echo 'Es Martes';
} elseif ($dia == '3') {
    echo 'Es miercoles';
} else {
    echo 'que dia es papito';
}

//ej 3
echo '<hr>';

$edad1 = 18;
$edad2 = 64;
$edadoficial = 21;

if ($edadoficial >= $edad1 && $edadoficial <= $edad2) {

    echo 'A trabajar el ctm';
}

//ej 4 SWITCH
echo '<hr>';

$day = 3424;

switch ($day) {
    case 1:
        echo 'Lunes';
        break;
    case 2:
        echo 'Martes';
        break;
    case 3:
        echo 'Miercoles';
        break;
    case 4:
        echo 'Jueves';
        break;
    case 5:
        echo 'Viernes';
        break;
    default:
        echo'Que dia es papurriiiii';
}
