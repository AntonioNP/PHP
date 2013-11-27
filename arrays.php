<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Ejercicio Arrays</h1>

        <?php
        $frutas = array("n" => "naranja", "p" => "platano", "m" => "manzana");
        $numeros = array(1, 2, 3, 4, 5, 6);
        $puestos = array("primero", 5 => "segundo", "tercero");

        echo "frutas:<br />";
        print_r($frutas);
        echo "<br />numeros:<br />";
        print_r($numeros);
        echo "<br />puestos:<br />";
        ;
        print_r($puestos);
        /*
          Array ( [n] => naranja [p] => platano [m] => manzana );
          Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 );
          Array ( [0] => primero [5] => segundo [6] => tercero );
         */
        echo "<hr>";
        echo $frutas["n"] . '<br/>'; //naranja
        echo $frutas['n'] . '<br/>'; //naranja
        echo $frutas[n] . '<br/>'; //naranja
        echo $frutas[0] . '<br/>'; //
        echo $numeros[0] . '<br/>'; //1
        echo $puestos[5] . '<br/>'; //segundo
        echo $puestos["5"] . '<br/>'; //segundo
        echo $puestos['5'] . '<br/>'; //segundo
        echo "<hr>";
        $a ["nom"] = 'Carlos';
        $a [] = "Pedro";
        print_r($a);
        echo "<br />";
        $a = array(1 => 'uno', 2 => 'dos', 3 => 'tres');
        unset($b[2]);
        $b = array_values($a);
        print_r($b);
        ?>
    </body>
</html>