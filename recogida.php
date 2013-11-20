<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ANP</title>
    </head>
    <body>
        <h1>recogida.php</h1>
        <hr>
        <?php
        $dni = $_POST["dni"];
        echo "<strong>DNI: </strong>$dni<br />";
        $nombre = $_POST["nombre"];
        echo "<strong>Nombre: </strong>$nombre<br />";
        $apellido = $_POST["apellido"];
        echo "<strong>Apellido: </strong>$apellido<br />";
        $direccion = $_POST["direccion"];
        echo "<strong>Dirección: </strong>$direccion<br />";
        $email = $_POST["email"];
        echo "<strong>Correo electrónico: </strong>$email<br />";
        $password = $_POST["password"];
        echo "<strong>Tu contraseña es: </strong>$password<br />";
        $radio1 = $_POST["radio1"];
        echo "<strong>La nota elegida es: </strong>$radio1<br />";
        $checkbox1 = $_POST["checkbox1"];
        echo "<strong>Tus asignaturas preferidas son: </strong><br />";
        for ($i = 0; $i < count($checkbox1); $i++) {
            echo "$checkbox1[$i].<br />";
        }
        echo "<hr>";
        ?>
    </body> 
</html>
