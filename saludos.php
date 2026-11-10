<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h1>HOLA!</h1>
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
    <a href="bienvenido.php">Bienvenido</a>
</body>
</html>