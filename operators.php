<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h3>Create an example of use for arithmetic operators: +, -, *, /, and%</h3>
    <?php
        $x = 10;
        $y = 6;

        $sum = $x + $y;
        $rest = $x - $y;
        $multi = $x * $y;
        $division = $x / $y;
        $porcentaje = $x % $y;

        echo "Sum: $sum <br>";
        echo "Rest: $rest <br>";
        echo "Multi: $multi <br>";
        echo "Divison: $division <br>";
        echo "Porcentaje: $porcentaje <br>";
    ?>
    <p class="example">
        $x = 10;<br>
        $y = 6;<br>

        $sum = $x + $y;<br>
        $rest = $x - $y;<br>
        $multi = $x * $y;<br>
        $division = $x / $y;<br>
        $porcentaje = $x % $y;<br>
    </p>
    <h3>Create a usage example for comparison operators: ==,! =, <,>, <=,> =</h3>
    <?php
        $x = 10;
        $y = 20;

        if ( $x == $y ) {
         echo "Equal";
        }
        if ( $x != $y ) {
            echo "Diferents";
        }
        if ( $x > $y ) {
            echo "Bigger";
        };
        if ( $x < $y ) {
            echo "Smoller";
        };
        if ( $x >= $y ) {
            echo "Bigger or equal";
        };
        if ( $x <= $y ) {
            echo "Smoller or equal";
        };
    ?>
    <p class="example">
        $x = 10;<br>
        $y = 20;<br>

        if ( $x == $y ) echo "Equal";<br>
        if ( $x != $y ) echo "Diferents";<br>
        if ( $x > $y )  echo "Bigger";<br>
        if ( $x < $y )  echo "Smoller";<br>
        if ( $x => $y ) echo "Bigger or equal";<br>
        if ( $x <= $y ) echo "Smoller or equal";
    </p>
    
    <h3>Create an example of use for logical operators: &&, And; ||, Or; ! (NOT); </h3>
    <?php
        $a = 10;
        $b = 20;
        $c = 30;
        $d = 10;

        if ( $a == $b && $c != $d) {
         echo "Result of example 1";
        }
        if ( $a == $b || $c != $d) {
            echo "Result of example 2";
           }
        if ( !$x < $y ) {
            echo "Result of example 3";
        };
    ?>
    <p class="example">
        $a = 10;<br>
        $b = 20;<br>
        $c = 30;<br>
        $d = 10;<br>

        if ( $a == $b && $c != $d) {<br>
         echo "Result of example 1";<br>
        }<br>
        if ( $a == $b || $c != $d) {<br>
            echo "Result of example 2";<br>
           }<br>
        if ( !$x < $y ) {<br>
            echo "Result of example 3";<br>
        };
    </p>
</body>
</html>