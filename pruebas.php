<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ANP</title>
        <link href="miCSS.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php

        function fn() {
            echo "Punto 1 dentro de la función, \$var = " . $var . "<br>";
            $var = "contenido2";
            echo "Punto 2 dentro de la función, \$var = " . $var . "<br>";
        }

        $var = "contenido1";
        fn();
        echo "Fuera de la función, \$var = " . $var . "<br>";
        echo"<br>";
        echo"<hr>";
        echo "EJEMPLO 2 DE ÁMBITO DE VARIABLES:";
        echo"<br>";

        function fn2() {
            global $var2;
            echo "punto 1 dentro de la función, \$var2 = " . $var2;
            echo"<br/>";
            $var2 = "contenido2";
            echo "punto 2 dentro de la función, \$var2 = " . $var2;
            echo"<br/>";
        }

        $var2 = "contenido1";
        fn2();
        echo "fuera de la función, \$var2 = " . $var2 . "<br>";
        echo "<hr>";
        echo "Paso de Parámetros1:";

        function create_table($data) {
            echo "<table border = 1>";
            reset($data);
            $value = current($data);
            while ($value) {
                echo "<tr><td>$value</td></tr>\n";
                $value = next($data);
            }
            echo "</table>";
        }

        $mi_array = array("Linea uno", "Linea dos", "Linea tres");
        create_table($mi_array);
        echo"<br>";
        echo"<hr>";

        function create_table2($data, $border = 1) {
            echo "<table border = $border>";
            reset($data);
            $value = current($data);
            while ($value) {
                echo "<tr><td>$value</td></tr>\n";
                $value = next($data);
            }
            echo "</table>";
        }

        $mi_array = array("Linea uno", "Linea dos", "Linea tres");
        create_table2($mi_array);
        echo"<br>";
        echo"<br>";
        create_table2($mi_array, 4);
        echo"<br>";
        echo"<hr>";
        echo "Paso de Parámetros por Valor: ";

        function incremento($valor, $cantidad = 1) {
            $valor += $cantidad;
        }

        $numero = 10;
        incremento($numero, 1);
        echo($numero);
        echo"<br>";
        echo"<hr>";
        echo "Paso de Parámetros por Referencia: ";

        function incremento2(&$valor, $cantidad = 1) {
            $valor += $cantidad;
        }

        $numero = 10;
        incremento2($numero, 1);
        echo($numero);
        echo"<br>";
        echo"<hr>";

        function showtitles() {
            for ($i = 0; $i < func_num_args(); $i++)
                echo (func_get_arg($i) . "<br/>\n");
        }

        showtitles('Titulo1');
        showtitles('Titulo1', 'Titulo2');
        showtitles('Titulo1', 'Titulo2', 'Titulo3');
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
