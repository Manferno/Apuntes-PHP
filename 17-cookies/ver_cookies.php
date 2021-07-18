<?php

/* 
Para mostrar el valor de las cookies, se debe usar $_COOKIE, una variable superglobal,
 es un array asociativo.
 
 */

if(isset($_COOKIE['micookie'])) {
    echo "<h1>".$_COOKIE['micookie']."</h1>";
}else {
    echo "No existe la cookie";
}

if(isset($_COOKIE['oneyear'])) {
    echo "<h1>".$_COOKIE['oneyear']."</h1>";
}else {
    echo "No existe la cookie";
}
?>
<a href="crear_cookies.php">Crear las Galletas</a>
<a href="borrar_cookies.php">Borrar las Galletas</a>