<?php

/* 
 Hacer un programa que muestre todos los numeros, entre dos numeros que nos lleguen por URL($_GET)
 */

if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    

$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];

for($i = $numero1; $i <= $numero2; $i++){
    
    echo "$i<br/>";
    
}


}else{
    echo "<h1>Pone bien la wea gil ql<h1/>";
    echo "<h1>Así se introduce la url ?numero1=2&numero2=3</h1>";
    
}
