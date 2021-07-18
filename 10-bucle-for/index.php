<?php

//FOR

/*for (variable contador, condicion, actualizar contador){
   //bloque de instrucciones
    
}

*/

$resultado = 0;
for($i = 0; $i <= 100; $i++){
    $resultado = $i + $resultado;
}

echo "<h1>El resultado es: $resultado<h1/>";

$numero=45;
for ($i = 0; $i <= 10; $i++){
    if ($numero == 45) {
        echo'no se puede mostrar la wea';
        break; //sirve para interrumpir un bucle
    }
    echo "$i x $numero = ".($numero*$i)."<br/>";
}