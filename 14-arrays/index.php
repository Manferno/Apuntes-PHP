<?php

/*
  ARRAYS
 * Un array es una coleccion o un conjunto de datos/valores/, bajo un único nombre.
 * Para acceder a esos valores podemos usar un indice numerico o alfanumerico.
 */

$pelicula = "Batman";
$peliculas = array('Batman', 'Spiderman', 'Wolverine');
$bandas = ['2Pac', 'Gorillaz', 'Metallica'];

//array asociativo 

$personas = array(
    'nombre' => 'Manuel',
    'edad' => '21',
    'web' => 'www.etankquantum.cl'
);

//var_dump($personas);


echo $peliculas[0];
echo '<br/>';
echo $bandas[1];

// Recorrer con FOR

echo "<h1>Lista de bandas</h1>";

echo '<ul>';
for ($i = 0; $i < count($bandas); $i++) {
    echo "<li>$bandas[$i]</li>";
}
echo '</ul>';

echo '<hr/>';
//Recorrer forEach  (ideal para recorrer arrays)

echo "Recorrido con forEach";

echo '<ul>';
foreach ($bandas as $bandaw) {
    echo "<li>$bandaw</li>";
}
echo '</ul>';

//arrays multidimensionales

$contactos = array(
    array(
        'nombre' => 'Manuel',
        'edad' => '21',
    ),
    array(
        'nombre' => 'Randolph',
        'edad' => '37',
    ),
    array(
        'nombre' => 'Irathon',
        'edad' => '446.568',
    ),
);


echo $contactos[2]['nombre'];

foreach($contactos as $key => $contacto){
    var_dump($contacto['nombre']);
}