<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ANP</title>
    </head>
    <body>
        <?php

        function mi_funcion() {
            echo "Mi función ha sido invocada"; //instrucciones
            return;
        }

        mi_funcion();

        echo "<h3>Ejercicio 1</h3>";
        echo "<em>En la primera función, con return o sin return devuelve lo mismo.</em><br />";

        function formato_nombre($nombre, $apellido1) {
            $nombre_completo = $nombre . " " . $apellido1;
            return $nombre_completo;
        }

        $nom = formato_nombre("Sandra", "Gómez");
        echo "El Nombre Completo es: $nom";
        echo"<br>";
        echo"<br>";
        echo "<em>En la segunda función sin el return no devuelve nada.</em><hr>";


        echo "<h3>Ejercicio 2</h3>";

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

        $misPasos = array("Paso uno", "Paso dos", "Paso tres");
        create_table2($misPasos);
        echo"<br>";
        echo"<br>";
        create_table2($misPasos, 4);
        echo"<br>";
        echo"<br>";
        echo "<em>Por valor:<br />Al cambiar un dato de un parámetro no varía el dato de la variable aun estando en otra función.</em><br />";

        echo "Paso de Parámetros por Valor: <br />";

        function incremento($valor, $cantidad = 1) {
            $valor += $cantidad;
        }

        $numero = 10;
        incremento($numero, 1);
        echo($numero);
        echo"<br>";
        echo"<br>";
        echo "Paso de Parámetros por Referencia: <br />";

        function incremento2(&$valor, $cantidad = 1) {
            $valor += $cantidad;
        }

        $numero = 10;
        incremento2($numero, 1);
        echo($numero);
        echo"<br>";
        echo"<br>";
//Paso de Parámetros por Valor: 10
//Paso de Parámetros por Referencia: 11


        echo "<em>Por referencia:<br />En este caso, el cambio de la vaiable si cambia el valor de la misma aun estando en otra función.</em><hr>";

        function test_return() {
            echo "Esta línea será ejecutada<br>";
            return;
            echo "Esta línea nunca será ejecutada<br>";
        }

//Llamar a la function anterior.
        function mayor($x, $y) {
            if (!isset($x) || !isset($y)) {
                echo "A esta función se le deben pasan dos números<br>";
                return;
            }
            if ($x >= $y)
                echo $x;
            else
                echo $y;
        }

        $a = 1;
        $b = 2.5;
        $c = 1.9;
        echo "El valor de a es: " . $a;
        echo"<br>";
        echo "El valor de b es: " . $b;
        echo"<br>";
        echo "El valor de c es: " . $c;
        echo"<br>";
        echo mayor($a, $b) . " es el mayor de a y b";
        echo"<br>";
        echo mayor($c, $a) . " es el mayor de c y a";
        echo"<br>";
        echo mayor($d, $a) . " es el mayor de d y a";
        echo"<br>";
        echo"<br>";
        echo "Ejemplo de Recursividad: ";
        echo"<br>";

        function invertir($str) {
            if (strlen($str) == 0)
                return "";
            else
                return invertir(substr($str, 1)) . substr($str, 0, 1);
        }

        echo invertir("Hola");
        echo"<br>";
        echo"<br>";
        ?>
    </body> 
</html>
