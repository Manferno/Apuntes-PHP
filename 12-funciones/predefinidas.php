<?php

//debuggear
$nombre = "Manuel Cruces";
var_dump($nombre);

//fecha
echo date('d-m-Y');
echo"<br/>";
echo time();

// Matematicas

echo"<br/>";
echo "Raiz cuadrada de 10: ".sqrt(10);

echo"<br/>";
echo"Número aleatorio entre 10 y 40: ".rand(10, 40);

echo"<br/>";
echo"Número pi: ".pi();

echo"<br/>";
echo "Redondear: ".round(3.50,1);

//Mas funciones generales


//Tipo de variable
echo"<br/>";
echo gettype($nombre);


//Comprueba el tipo de variable
echo"<br/>";
if (is_string($nombre)) {
    echo "La variable es un string";
}

echo"<br/>";
if (!is_float($nombre)) {
    echo "La variable NO es un float";
}

//Comprueba si la variable existe 
echo"<br/>";
$edad = 18;

if (isset($edad)) {
    
    echo 'La variable existe';
}else{
    echo'La variable NO existe';
}

//limpiar espacios en blanco 
echo"<br/>";
$frase = "        HOLA             ";
trim($frase);

//elminar variables / indices

$year = 2020;
unset($year);
//verificar con vardump;

//comprobar variable vacía
$texto = 'xD';

if (empty($texto)) {
    
    echo 'Esta vacia';
}else{
    echo'Tiene contenido';
}


//Contar caracteres de un string
echo"<br/>";
$cadena = "12345";
echo strlen($cadena);


//Encontrar caracter, da su posición
echo"<br/>";
$frase1 = "La vida es bella";
echo strpos($frase1, "vida");

//Reemplazar palabras de un string
echo"<br/>";

$frase = str_replace("vida", "moto", $frase1);
echo $frase;

// Convertir a Mayusculas y minusculas
echo"<br/>";
echo strtolower($frase1);
echo"<br/>";
echo strtoupper($frase1);