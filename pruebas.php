<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ANP</title>
        <link href="miCSS.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        $pizza = "piece1 piece2 piece3 piece4 piece5 piece6";
        $pieces = explode(" ", $pizza);
        echo $pieces[0];
        echo $pieces[1];
        echo "<hr>";
        $cadena1 = "Esto es una cadena de texto ";
        $cadena2 = "Esta es una segunda cadena de texto";
        $cadena3 = 127;
        $cadena4 = 257.89;
        $union1 = $cadena1 . $cadena2;
        $union2 = $cadena1 . $cadena3;
        $union3 = $cadena3 . $cadena4;
        echo $union1, "<br>";
        echo $union2, "<br>";
        echo $union3, "<br>";
        $cadena3 .=" Este es el texto que se añadirá a la variable cadena3";
        echo $cadena3, "<br>";
        ?>
        <div id="pie">
            <div id="izq">
                <h2><a href="index.php"><img src="img/volver.png" />Volver al menú principal</a></h2>
            </div>
            <div id="der">
                <h2><img src="img/iconPerson.png" />Antonio Navarro Peris</h2>
            </div>
        </div>
    </body> 
</html>
