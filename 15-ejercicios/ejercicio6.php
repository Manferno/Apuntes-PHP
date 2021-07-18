<?php
$tabla = array(
    "ACCION" => array('GTA', 'BATMAN', 'DOOM'),
    "AVENTURA" => array('DARK SOUL', 'SEKIRO', 'FALLOUT'),
    "DEPORTE" => array('FIFA', 'PES', 'SSX')
);
//entrega el indice de los array
$categorias = array_keys($tabla);
?>

<table border ="1">
    <?php require_once'ejercicio6/header.php'; ?>
    <?php require_once'ejercicio6/accion.php'; ?>
    <?php require_once'ejercicio6/aventura.php'; ?>
    <?php require_once'ejercicio6/deporte.php'; ?>

</table>
