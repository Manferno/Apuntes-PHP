<?php

/*
  FUNCIONES
 * Una función es un conjunto de instrucciones agrupadas bajo un nombre concreto
  y que pueden reutilizarse solamente cuando se llaman dichas funciones, tanto como se requiera.

  function nombre_funcion($parametro){
  //instrucciones
  }
  nombre_funcion($miparametro);
 *  */

//Ejemplo 1

function muestraNombre() {
    echo'Manuel' . '<br/>';
    echo'Eres' . '<br/>';
    echo'Un' . '<br/>';
    echo'Sol' . '<br/>';
    echo'<hr/>';
}

//llamar función
muestraNombre();
muestraNombre();
muestraNombre();
muestraNombre();

//Ejemplo 2

function tabla($numero) {
    echo "<h3>Tabla de multiplicar del número: $numero </h3>";

    for ($i = 1; $i <= 10; $i++) {
        $operacion = $numero * $i;
        echo "$numero x $i = $operacion <br/>";
    }
}

/*
  if (isset($_GET['numero'])) {
  tabla($_GET['numero']);
  }else{
  echo 'No has ingresado nada';
  }
 */


/*
  for ($i = 1; $i <= 10; $i++){
  tabla($i);
  }
 * 
 */

//Ejemplo 3

function calculadora($numero1, $numero2, $negrita = true) {


    //Conjunto de instrucciones a ejecutar
    $suma = ($numero1 + $numero2);
    $resta = ($numero1 - $numero2);
    $multi = ($numero1 * $numero2);
    $div = ($numero1 / $numero2);

    $cadena = "";

    if ($negrita) {
        $cadena .= "<h1>";
    }

    $cadena .= "Suma: $suma <br/>";
    $cadena .= "Resta: $resta <br/>";
    $cadena .= "Multiplicación: $multi <br/>";
    $cadena .= "División: $div <br/>";


    if ($negrita) {
        $cadena .= "</h1>";
    }

    $cadena .= "<hr/>";

    return $cadena;
}

echo calculadora(3, 2);

//Ejemplo 4

function getNombre($nombre){
    $texto = "El nombre es: $nombre";
    return $texto;
}

function getApellido($apellidos){
    $texto = "El apellido es: $apellidos";
    return $texto;
}

function devuelveElNombre($nombre, $apellidos) {
    $texto = getNombre($nombre)
            . "<br/>"
            . getApellido($apellidos);

    return $texto;
}

echo devuelveElNombre("Manuel", "Cruces");

