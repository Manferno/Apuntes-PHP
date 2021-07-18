<?php

/*
 1. una función
 2. validar un email con filter_var
 3. recoger variable por get y validarla
 4. mostrar el resultado
 */

function ValidarEmail($email){
    $status = 'Email NO válido';        
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $status = 'Email válido';        
    }

    return $status;

    }
if(isset($_GET['email'])){
echo validarEmail($_GET["email"]);

}else{
    echo "Pasa por get un email";
}





 ?>

