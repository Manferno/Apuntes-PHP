<?php

/* 
Ej1 Crear una sesión que aumente su valor en uno o disminuya en uno 
en función de si el parametro get counter es uno o a cero.

*/

session_start();

if(!isset($_SESSION["numero"])){
    $_SESSION['numero'] = 0;
    }

    if(isset($_GET['counter']) && $_GET['counter']==1){
        $_SESSION['numero']++;
    }

    if(isset($_GET['counter']) && $_GET['counter']==0){
        $_SESSION['numero']--;
          }

    if(isset($_GET['counter']) && $_GET['counter']==2){
            session_destroy();
            header("Refresh:0; URL= ejercicio1.php");   
              }      

?>

<h1>El valor de la sesión número es: <?=$_SESSION['numero']?></h1>
<a href="ejercicio1.php?counter=1">Aumentar el valor</a><br/>
<a href="ejercicio1.php?counter=0">Disminuir el valor</a><br/><br/><br/><br/><br/>


<a href="ejercicio1.php?counter=2">cero</a>
