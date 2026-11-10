<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludos</title>
</head>
<body>
    <center>
    <h1>HOLA!</h1>
    <!-- Seleccion de botones a base del form y botones -->
    <h3>Elegir idioma al gusto</h3>
    <form method = "POST" action ="">
        <button type = "submit" name = "Ruso" style="width: 100px">Ruso</button>
    </form>
    <form method = "POST" action ="">
        <button type = "submit" name = "Ingles" style="width: 100px">Ingles</button>
    </form>
    <form method = "POST" action ="">
        <button type = "submit" name = "Italiano" style="width: 100px">Italiano</button>
    </form>
    <form method = "POST" action ="">
        <button type = "submit" name = "Frances" style="width: 100px">Frances</button>
    </form>
    <form method = "POST" action ="">
        <button type = "submit" name = "Chino" style="width: 100px">Chino</button>
    </form>
    <?php
        //Comprobacion de que boton es que se toco
            if($_SERVER["REQUEST_METHOD"]==="POST" && isset($_POST["Ruso"])){
                echo"<h2>¡Здравствуйте!</h2>";
           }
           if($_SERVER["REQUEST_METHOD"]==="POST" && isset($_POST["Ingles"])){
                echo"<h2>¡Hi!</h2>";
           }
            if($_SERVER["REQUEST_METHOD"]==="POST" && isset($_POST["Italiano"])){
                echo"<h2>¡Ciao!</h2>";
           }
            if($_SERVER["REQUEST_METHOD"]==="POST" && isset($_POST["Frances"])){
                echo"<h2>¡Salut!</h2>";
           }
            if($_SERVER["REQUEST_METHOD"]==="POST" && isset($_POST["Chino"])){
                echo"<h2>¡你好!</h2>";
           }
    ?>
    
    <!-- Link para ir a bienvendio.php -->
    <a href="bienvenido.php">Bienvenido</a>
</body>
</html>