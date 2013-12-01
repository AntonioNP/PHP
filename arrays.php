<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ANP</title>
        <link href="miCSS.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>Ejercicio de Arrays:</h1>
        <strong>Ejercicio 1: Mostrar sólo los índices (usando el while) del ejer anterior.</strong><br />
        <?php
        $arr = array("Mamifero" => "Ballena", "Insecto" => "Hormiga");
        reset($arr);
        while (list($indice) = each($arr))
            echo "Indice: $indice.<br />";
        echo "<hr>";
        ?>
        <strong>Ejercicio 2: Mostrar los índices y valores del ejercicio anterior usando el bucle while y foreach.</strong><br />
        <?php
        $arr = array("Mamifero" => "Ballena", "Insecto" => "Hormiga");
        reset($arr);
        while (list($indice, $contenido) = each($arr))
            echo "Indice: $indice, contenido: $contenido.<br />";
        echo "<hr>";
        ?>
        <strong>Ejercicio 4: Realizar las pruebas de las funciones anteriores.</strong><br />
        <?php
        $array = array('apellido', 'email', 'telefono');
        print_r(array_keys($array));
        echo "<br />";
        print_r(array_values($array));
        echo "<br />";
        print_r(in_array(email, $array));
        echo "<br />";
        print_r(range(0, 2));
        echo "<br />";
        print_r(array_reverse($array));
        echo "<br />";
        print_r(shuffle($array));
        echo "<br />";
        print_r(array_merge($array));
        echo "<hr>";
        ?>
        <strong>Ejercicio 5: Realizar un ejemplo de uso de Pilas mediante arrays.</strong><br />
        <?php
        $array2 = array('Ana', 'Navarro', 'Palmero');
        print_r(array_values($array2));
        echo "<br />";
        print_r(array_pop($array2));
        echo "<br />";
        print_r(array_values($array2));
        echo " Ha sacado y eliminado \"Palmero\".";
        echo "<br />";
        print_r(array_push($array2, "Palmero"));
        print_r(array_values($array2));
        echo " Introducimos de nuevo \"Palmero\".";
        echo "<hr>";
        ?>
        <strong>Ejercicio 6: Realizar un ejemplo de uso de Colas mediante arrays.</strong><br />
        <?php
        $array3 = array('cero', 'uno', 'dos', 'tres');
        print_r(array_values($array3));
        echo "<br />";
        print_r(array_shift($array3));
        echo "<br />";
        print_r(array_values($array3));
        echo "<br />";
        print_r(array_unshift($array3,"otra vez cero"));
        echo "<br />";
        print_r(array_values($array3));
        echo "<hr>";
        ?>
        <br />
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