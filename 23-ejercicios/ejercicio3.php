<?php
/**
 * Ej3. Hacer una interfaz de usuario (formulario) con dos inputs y 4 botones uno para sumar, restar, div y mult
 */
$resultado = false;
if(isset($_POST['n1']) && isset($_POST['n2'])){



    if(isset($_POST['sumar'])){
        $resultado = "El resultado es: ".($_POST['n1']+$_POST['n2']);
    }

    if(isset($_POST['restar'])){
        $resultado = "El resultado es: ".($_POST['n1']-$_POST['n2']);
    }

    if(isset($_POST['multiplicar'])){
        $resultado = "El resultado es: ".($_POST['n1']*$_POST['n2']);
    }

    if(isset($_POST['dividir'])){
        $resultado = "El resultado es: ".($_POST['n1']/$_POST['n2']);
    }
}


?>

<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Calculadora PHP</title>
</head>
<body>
    <form action="" method="POST">
        <label for="n1">Número 1</label><br/>
        <input type="number" name="n1"><br/>

        <label for="n2">Número 2</label><br/>
        <input type="number" name="n2"><br/><br/>

        <input type="submit" value="sumar" name="sumar"><br/>
        <input type="submit" value="restar" name="restar"><br/>
        <input type="submit" value="multiplicar" name="multiplicar"><br/>
        <input type="submit" value="dividir" name="dividir"><br/>
     

    </form>

    <?php
        if($resultado != false ){
            echo    "<h2>$resultado</h2>";
        }
    ?>

</body>
</html>