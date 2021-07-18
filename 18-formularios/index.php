<!--disabled="disabled"--*
minlengh y max lenght 
pattern (A-Z) -validacion de caracteres en el input
required - campo requerido
placeholder --texto por defecto
value -- da un valor al input-->
<html lang="es">    
    <head>
        <meta charset="utf-8"/>
        <title>Formulario PHP y HTML</title>
    </head>
    <body>
        <h1>Formulario</h1>
        <form action="" method="POST" enctype="multipart/form-data">

            <label for="nombre">Nombre</label> 
            <p><input type="text" name="nombre" autofocus="autofocus" /><br/></p>

            <label for="apellido">Apellido</label> 
            <p><input type="text" name="apellido"  /><br/></p>

            <label for="boton">Boton</label> 
            <p><input type="button" name="boton"  value="Click Here!" /><br/></p>

            <label for="sexo">Sexo:</label> 
            <p>
                Hombre <input type="checkbox" name="sexo"  value="hombre" checked="checked"/><br/>
                Mujer  <input type="checkbox" name="sexo"  value="mujer"/><br/>
            </p>

            <label for="color">Color: </label> 
            <p><input type="color" name="color" /><br/></p>

            <label for="fecha">Fecha: </label> 
            <p><input type="date" name="fecha" /><br/></p>

            <label for="email">Email: </label> 
            <p><input type="email" name="email" /><br/></p>

            <label for="archivo">Archivo: </label> 
            <p><input type="file" name="archivo" multiple="multiple" /><br/></p>

            <label for="numero">Número: </label> 
            <p><input type="number" name="numero" /><br/></p>

            <label for="pass">Contraseña: </label> 
            <p><input type="password" name="pass" /><br/></p>

            <label for="continente">Continente: </label> 
            <p>
                Latinoamerica<input type="radio" name="contienente"  value="Latinoamerica"/><br/>
                Asia<input type="radio" name="contienente"  value="Asia"/><br/>
                Africa<input type="radio" name="contienente"  value="Africa"/><br/>

            </p>
            
            <label for="web">Página Web: </label> 
            <p><input type="url" name="web" /><br/></p>
            
            <label for="textarea">Text area: </label> 
            <textarea></textarea><br/>
            
            Peliculas:
            <select name="peliculas">
                <option value="Birdman">Birdman</option>
                <option value="Batman">Batman</option>
                <option value="Blade">Blade</option>
            </select>
            <br/>

            <input type="submit" name="Enviar" />


        </form>

    </body>
</html>
