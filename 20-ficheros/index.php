<?php

/*

//abrir archivo
$archivo = fopen("fichero_texto.txt", "a+");

//leer contenido
while (!feof($archivo)) {
    $contenido = fgets($archivo);
    echo $contenido."<br/>";
}

//escribir

fwrite($archivo, "**********SOY UN ANEXO DESDE PHP");

// cerrar archivo
fclose($archivo);
*/


//copiar fichero

//copy('fichero_texto.txt', 'fichero_copiado.txt') or die("error copiar");

//renombrar

//rename('hijodelaperraaaaa', 'hijodelaperraaaaa.txt');

//eliminar fichero

//unlink('hijodelaperraaaaa.txt') or die('error al borrar');

if (file_exists("fichero_textoasd.txt")) {
    echo 'El archivo existe';
}
else{
    echo 'No existe la wea';
}



