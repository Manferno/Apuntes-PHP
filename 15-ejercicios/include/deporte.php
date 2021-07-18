<?php

$deporte = array ('FIFA', 'PES', 'SSX');

echo"<table border='1'> <tr>"; //inicio tabla

echo"<tr>";  //inicio fila 1 de celdas

    echo"<th>Tabla de Deporte</th>";


echo"</tr>"; //fin fila 1 de celdas

echo"<tr>";  //inicio fila 2 de celdas

echo '<td>';
for ($i = 0; $i < count($deporte); $i++) {
    echo "<li>$deporte[$i]</li>";
}
echo '</td>';

echo"</tr>";  //cierre fila 2 de celdas

echo"</table>"; //fin tabla

