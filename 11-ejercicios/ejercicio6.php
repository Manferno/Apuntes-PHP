<?php

/* 
 Imprimir por pantalla, todas las tablas de multiplicar del 1 al 10 
 * dentro de una tabla html.
 */

echo"<table border='1'> <tr>"; //inicio tabla

echo"<tr>";  //inicio fila 1 de celdas
for($cabecera = 1; $cabecera <= 10; $cabecera++){
    echo"<th>Tabla del $cabecera</th>";
}

echo"</tr>"; //fin fila 1 de celdas

echo"<tr>";  //inicio fila 2 de celdas

for ($i = 1; $i <= 10; $i++){
    echo "<td>";
    
    for($x = 1; $x<=10; $x++){
    echo "$i x $x = ".($x*$i)."<br/>";
    }
    
    echo "</td>";
}

echo"</tr>";  //cierre fila 2 de celdas

echo"</table>"; //fin tabla

