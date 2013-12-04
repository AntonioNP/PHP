<!DOCTYPE html>
<html>
    <head>
        <title>ANP</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="miCSS.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript">

        </script>
    </head>
    <body>
        <?php
        /* Ejercicio1: Uso de Explode
          Dado vuestro “Apellido1 Apellido2, Nombre”.
          Obtener las siguientes salidas usando la función EXPLODE:
          Los apellidos son: Apellido1 Apellido2
          El nombre es: Nombre
          El nombre y apellidos son: Nombre Apellido1 Apellido2.
          Posteriormente mostrar el array de cadenas. Usar print_r y var_dump.
          ¿Qué diferencias hay entre print_r y var_dump? */
        echo "EJERCICIO 1:<br>";
        $nombrecompleto = "Navarro Peris, Antonio";
        $separacion = explode(",", $nombrecompleto);
        echo "los apellidos son " . $separacion[0] . "<br>";
        echo "el nombre es " . $separacion[1];
        echo "<br>-----<br>";
        echo "el nombre y apellidos son " . $separacion[1] . " " . $separacion[0] . "<br>";
        print_r($separacion);
        echo "<br>-----<br>";
        echo "Imprisión con var_dump: <br>";
        var_dump($separacion);
        echo "<br>-----<br>";
        echo "<strong>print_r: </strong><u>Recibe una variable y la muestra entera, si la variable es un array muestra todo su contenido.</u>
          <br><strong>var_dump: </strong> <u>muestra información estructurada sobre una o más expresiones incluyendo su tipo y valor</u>";
        echo "<hr>";


        /* Ejercicio2: Uso de Explode
          $pizza = "piece1 piece2 piece3 piece4 piece5 piece6";
          $pieces = explode(" ", $pizza);
          echo $pieces[0]; // piece1
          echo $pieces[1]; // piece2
          Dado el ejercicio anterior, mostrar todos los pieces una en cada fila.
          Lo vamos a realizar independientemente del número de pieces. */
        echo "EJERCICIO 2:<br>";
        $pizza = "piece1 piece2 piece3 piece4 piece5 piece6";
        $pieces = explode(" ", $pizza);
        for ($x = 0; $x < count($pieces); $x++) {
            echo $pieces[$x] . "<br/>";
        }
        echo "<hr>";

        /* Ejercicio3: Uso de Explode
          $str = 'one|two|three|four'; // positive limit
          print_r(explode('|', $str, 2));
          Realizar:
          Modifica la variable $str para que llegue hasta 10.
          Mostrar cada número en un elemento del array y el último
          elemento del array contenga del cinco haste el final.
          Mostrar cada número en un elemento del array excepto
          los dos últimos. Comprobar con print_r. */
        echo "EJERCICIO 3:<br>";
        $str = 'one|two|three|four|five|six|seven|eigth|nine|ten'; // positive limit
        print_r(explode('|', $str, 5));
        echo "<br>";
        print_r(explode('|', $str, -2));
        echo "<hr>";


        /* Ejercicio 4: strstr
          Buscar el carácter “s” en la cadena $email del ejemplo anterior.
          Si no lo encuentra mostrar “No ha encontrado ‘s’ dentro del email”. */
        echo "EJERCICIO 4:<br>";
        $email = 'names@examples.coms';
        echo "email: " . $email;
        echo "<br>";
        $busqueda = strstr($email, 's', true);
        if ($busqueda == 's') {
            echo $busqueda;
        } else {
            echo "No ha encontrado ‘s’ dentro del email";
        }
        echo "<hr>";


        /* Ejercicio 5:
          Comprobar la equivalencia entre 10 y \n, mediante el uso de alguna función.
          Razona la respuesta. */

        echo "EJERCICIO 5";
        echo"<br/>";
        $text = "Line 1\nLine 2\nLine 3";
        print_r($text);
        echo"<br/>";
        $last = substr(strrchr($text, 10), 1);
        echo $last; //Devuelve Line 3
        echo"<br/>";
        $last = substr(strrchr($text, "\n"), 1);
        echo $last; //Devuelve Line 3
        echo"<br/>";
        echo '<u>En la tabla ASCII 10 corresponde a \n, por lo que el resultado es el mismo</u>';
        echo "<hr>";


        /* Ejercicio 6: strpos
          Comprobar el ejercicio anterior, y arreglarlo para que funcione.
          No devuelve “ We found ….”
          Razona la respuesta. */
        echo "EJERCICIO 6";
        echo"<br/>";
        $findme = 'A';
        $mystring1 = 'ayz';
        $mystring2 = 'ABC';
        $pos1 = strpos($mystring1, $findme);
        $pos2 = strpos($mystring2, $findme);
        if ($pos1 === false) {
            echo "The string '$findme' was not found in the string '$mystring1'";
        }
        echo"<br/>"; // Nótese el uso de ===
//Usar sólo == no funcionará como se espera
// debido a que la posición de 'a' es el 0º (primer) caracter.
        if ($pos2 !== false) {
            echo "We found '$findme' in '$mystring2' at position $pos2";
        }

        echo"<br/>";
        echo "<u>La razón es que hay que añadir otro igual para que detecte que son del mismo tipo</u>";
        echo "<hr>";


        /* Ejercicio 7: stripos
          Realiza un ejemplo basándote en el caso anterior con stripos. */
        echo "EJERCICIO 7";
        $findme = 'A';
        $mystring1 = 'abc';
        $mystring2 = 'ABC';
        $pos1 = stripos($mystring1, $findme);
        $pos2 = stripos($mystring2, $findme);
        if ($pos1 === false) {
            echo "The string '$findme' was not found in the string '$mystring1'";
        }
        echo"<br/>"; // Nótese el uso de ===
//Usar sólo == no funcionará como se espera
// debido a que la posición de 'a' es el 0º (primer) caracter.
        if ($pos2 !== false) {
            echo "We found '$findme' in '$mystring2' at position $pos2";
        }
        echo"<br/>";
        echo "<u>La función Stripos no distingue entre mayusculas y minusculas.</u>";
        echo "<hr>";


        /* Ejercicio 8: array_walk
          Ejecuta y razona qué es lo que hace.
          ¿Qué significa & */
        echo "EJERCICIO 8";
        echo"<br/>";

        $frutas = array("d" => "limon", "a" => "naranja", "b" => "banana", "c" => "manzana");

        function test_alter(&$elemento1, $clave, $prefijo) {
            $elemento1 = "$prefijo: $elemento1";
        }

        function test_print($elemento2, $clave) {
            echo "$clave. $elemento2<br />\n";
        }

        echo "Antes ...:\n";
        array_walk($frutas, 'test_print');
        array_walk($frutas, 'test_alter', 'fruta');
        echo "... y despues:\n";
        array_walk($frutas, 'test_print');

        echo "<strong>array_walk</strong> <u>aplica una función de usuario a cada miembro de un array. </u><br>";
        echo "<strong>&</strong> <u>quiere decir que se asigna el valor por referencia y si no es por referencia no funciona.</u>";
        echo "<hr>";


        /* Ejercicio 9: substr Realizar el ejercicio 1 sin usar la función Explode. */
        echo "EJERCICIO 9:<br>";
        $nombrecompleto = "Navarro Peris, Antonio";
        $apellidos = substr(trim("$nombrecompleto", $nombre), 0, -7);
        $nombre = substr(stristr($nombrecompleto, ","), 1);
        echo "Los apellidos son: " . $apellidos;
        echo "<br>";
        echo "El nombre es: " . $nombre;
        echo "<br>";
        echo "El nombre y apellidos son: " . $nombre . " " . $apellidos;
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