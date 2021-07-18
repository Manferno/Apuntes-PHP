<!DOCTYPE html>

<html>
    <head>
        <title>Validar formulario</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
        <?php 
        if (isset($_GET['error'])) {
            
            $error = $_GET['error'];
            
            if ($error == 'faltan_valores') {
                echo '<strong style="color:red">Introduce bien la wea </strong>';
            }
            
            if ($error == 'nombre') {
                echo '<strong style="color:red">Introduce el nombre </strong>';
            }
            
               if ($error == 'apellidos') {
                echo '<strong style="color:red">Introduce el apellido </strong>';
            }
            
                if ($error == 'edad') {
                echo '<strong style="color:red">Introduce bien la edad </strong>';
            }
            
              if ($error == 'email') {
                echo '<strong style="color:red">Correo mal </strong>';
            }
            
                if ($error == 'password') {
                echo '<strong style="color:red">Password insegura </strong>';
            }
            
        }
        
        ?>

        <form action="procesar_formulario.php" method="POST">
            <h1>Validar Formulario PHP</h1>  

            <label for="nombre">Nombre</label><br/>
            <input type="text" name="nombre" required="required" pattern="[A-Za-z]+"/><br/>

            <label for="apellido">Apellido</label><br/>
            <input type="text" name="apellido" required="required" pattern="[A-Za-z]+"/><br/>

            <label for="edad">Edad</label><br/>
            <input type="number" name="edad" required="required" pattern="[0-9]+"/><br/>

            <label for="email">Email</label><br/>
            <input type="mail" name="email" required="required"/><br/>

            <label for="clave">Contraseña</label><br/>
            <input type="password" name="clave" required="required"/><br/>


            <input type="submit" value="enviar"/>
        </form>


    </body>
</html>
