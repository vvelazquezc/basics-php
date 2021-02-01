<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How print</title>
    <link rel="stylesheet" href="style.css">
</head>
</style>
<body>
    <section>
        <h3>Generate an instruction that makes use of "echo"</h3>
        <?php
            $string = "This is a example how to use 'echo'";

            echo "$string";
        ?>
        <p class="example">
            $string = "This is a example how to use 'echo'";<br>
            echo "$string";
        </p>
    </section>
    <section>
        <h3>Generate an instruction that makes use of "print"</h3>
        <?php
            $string = "This is a example how to use 'print'<br>";

            print($string);

            print "print() also works without parentheses.";
        ?>
        <p class="example">
        $string = "This is a example how to use 'print'";<br>
        print($string);<br>
        print "print() also works without parentheses.";
        </p>
    </section>
    <section>
        <h3>Generate an instruction that makes use of "print_r", it is important that you assign a complex value to analyze its potential</h3>
        <?php
            $array = array (
                'a' => 'example1', 
                'b' => 'example2', 
                'c' => array ('example3-1', 'example3-2', 'example3-3'));
            print_r ($array);
        ?>
        <p class="example">
            $array = array (<br>
                'a' => 'example1', <br>
                'b' => 'example2', <br>
                'c' => array ('example3-1', 'example3-2', 'example3-3'));<br>
            print_r ($array);
        </p>
    </section>

</body>
</html>