<?php
$error = 'faltan_valores';

if (!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['edad']) &&
        !empty($_POST['email']) && !empty($_POST['clave'])) {
    $error = 'ok';
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellido'];
    $edad = (int)$_POST['edad'];
    $email = $_POST['email'];
    $clave = $_POST['clave'];

    //validar el nombre
    if (!is_string($nombre) || preg_match("/[0-9]/", $nombre)) {
        $error = 'nombre';        
    }
    
    if (!is_string($apellidos) || preg_match("/[0-9]/", $apellidos)) {
        $error = 'apellidos';        
    }
    
      if (!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)) {
        $error = 'edad';        
    }
    
       if (!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'email';        
    }
    
     if (empty($clave) || strlen($clave)<5) {
        $error = 'password';        
    }
    
} else {

    $error = 'faltan_valores';
    
}

if ($error != 'ok') {
   header("Location:index.php?error=$error");
}
?>


<html>
    <head>
        <title>Validar formulario</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php if ($error == 'ok'): ?>
            <h1>Datos validados</h1>
            <p><?= $nombre ?></p>
            <p><?= $apellidos ?></p>
            <p><?= $edad ?></p>
            <p><?= $email ?></p>

        <?php endif; ?>   

    </body>

</html>