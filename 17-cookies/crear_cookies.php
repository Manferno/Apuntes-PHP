<?php

/* 
 Cookie: es un fichero que se almacena en el ordenador del usuario que visita
 la web, co el fin de recordar datos o rastrear el comportamiento de este en la web.
 
 */


//Crear cookie

//setcookie("nombre", "valor que solo puede ser texto", caducidad);

//cookie básica
setcookie("micookie", "valor de mi galleta");

//cookie con expiración

setcookie("oneyear", "valor de mi cookiie de 365 días", time()+(60*60*24*365));

header('Location:ver_cookies.php');
?>

