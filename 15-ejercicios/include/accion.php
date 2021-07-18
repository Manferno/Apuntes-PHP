<?php

$accion = array('GTA', 'BATMAN', 'DOOM');

echo"<table border='1'> <tr>"; //inicio tabla

echo"<tr>";  //inicio fila 1 de celdas

    echo"<th>Tabla de Acción</th>";


echo"</tr>"; //fin fila 1 de celdas

echo"<tr>";  //inicio fila 2 de celdas

echo '<td>';
for ($i = 0; $i < count($accion); $i++) {
    echo "<li>$accion[$i]</li>";
}
echo '</td>';

echo"</tr>";  //cierre fila 2 de celdas

echo"</table>"; //fin tabla

