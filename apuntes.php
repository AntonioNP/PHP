<!DOCTYPE html>
<!--
Copyright 2013 AntonioNP.

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

     http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <?php
        $el_array = array('Enero', 10.3, TRUE);
        print_r($el_array);

        echo "<hr>";
        $frutas = array("n" => "naranja", "p" => "platano", "m" => "manzana");
        $numeros = array(1, 2, 3, 4, 5, 6);
        $puestos = array("primero", 5 => "segundo", "tercero");
        print_r($frutas);
        echo "<br>";
        print_r($numeros);
        echo "<br>";
        print_r($puestos);
        echo "<br>";
        echo $frutas["n"] . '<br/>'; //naranja
        echo $frutas['n'] . '<br/>'; //naranja
        echo $frutas[n] . '<br/>'; //naranja
        echo $frutas[0] . '<br/>'; //
        echo $numeros[0] . '<br/>'; //1
        echo $puestos[5] . '<br/>'; //segundo
        echo $puestos["5"] . '<br/>'; //segundo
        echo $puestos['5'] . '<br/>'; //segundo
        ?>
        <h2>Funciones:range, unset y array_values</h2>
        <strong>range(): </strong>
    <u>Define un rango de valores:</u>
    <p>$numeros = range(2,5); // $numeros = array (2, 3, 4, 5);<br />
        $numeros = range(5,2); // $numeros = array (5, 4, 3, 2);
    </p>
    <strong>unset(): </strong>
    <u>La función unset() permite eliminar un elemento de una matriz o la matriz entera:</u>
    <p>$matriz = array(5 => 1, 12=> 2);<br />
        $matriz[] = 56; // Esto es igual que $matriz[13] = 56;<br />
        unset($matriz[5]); // Esto elimina el primer elemento de la matriz<br />
        unset($matriz); // Esto elimina la matriz completa</p>
    <strong>array_values(): </strong>
    <u>Con unset() de un elemento de la matriz, la matriz NO es re-indexada. Hay que usar array_values().</u>
    <p>$a = array(1 => 'uno', 2 => 'dos', 3 => 'tres');<br />
        unset($a[2]); // $a = array(1 => 'uno', 3 => 'tres');<br />
        $b = array_values($a);<br />
        print_r ($b); // Array(0 => 'uno', 1 =>'tres')</p>
    <h2>Conversiones a array:</h2>
    <p>Para cualquiera de los tipos: (integer, float, string, boolean, resource) si convierte un valor a un array, se obtiene un array con un elemento (con índice 0), el cual es el valor escalar con el que inició.</p>
    <p>
        $mi_array = 20;<br />
        $a = (array) $mi_array;<br />
        print_r($a);   <br />     
        Resultado: Array ( [0] ⇒ 20 )<br />
        Si convierte un valor NULL a matriz, obtiene un array vacío.</p>
    <h2>Funciones de recorrido de un array</h2>
    <table border="1">
        <tr>
            <td>reset()</td>
            <td>Hace que el puntero interno apunte al primer elemento del array.</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
    </table>
</body>
</html>
