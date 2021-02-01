<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
</head>
<body>

<h3>Print a text string</h3>
    <?php
    echo 'Hello';
    echo '<br>';
    ?>
    <p class="example">
        echo 'Hello';</p>

<h3>Print a text string that interpret variables</h3>
    <?php
        $name = 'Veronica';
        echo "Hello $name";
        echo '<br>';
    ?>
    <p class="example">
        $name = 'Veronica';
        echo "Hello $name";
    </p>

<h3>Concatenate a previously declared variable in a text string</h3>
    <?php
        echo 'hello ' . $name;
        echo '<br>';
    ?>
    <p class="example">
        echo 'hello ' . $name;
    </p>
<h3>Execute the function that allows you to replace text in a string (case sensitive)</h3>
    <?php
        $my_str = 'If the Facts do not fit the theory, change the facts.';
        echo str_replace("Facts", "truth", $my_str);
        echo '<br>';
    ?>
    <p class="example">

        $my_str = 'If the Facts do not fit the theory, change the facts.';<br>
        echo str_replace("Facts", "truth", $my_str);
    </p>
<h3>Execute the function that allows you to replace text in a string (without taking into account upper / lower case)</h3>
    <?php
        echo str_ireplace("facts", "truth", $my_str);
        echo '<br>';
    ?>
    <p class="example">
        echo str_ireplace("facts", "truth", $my_str);
    </p>

<h3>Execute the function that allows you to write a text N times</h3>
    <?php
        echo str_repeat('hello ', 5);
        echo '<br>';
    ?>
    <p class="example">
        echo str_repeat('hello ', 5);
    </p>
<h3>Execute the function that allows to obtain the length of a text string</h3>
    <?php
        echo strlen('hello ');
        echo '<br>';
    ?>
    <p class="example">
    echo strlen('hello ');
    </p>

<h3>Executes the function that allows to obtain the position of the first occurrence of a text within a text string</h3>
    <?php
        echo strpos('hello', 'l');
        echo '<br>';
    ?>
    <p class="example">
        echo strpos('hello', 'l');
    </p>
<h3>Execute the function that allows a text string to be capitalized</h3>
    <?php
    echo strtoupper($my_str);
    echo '<br>';
    ?>
    <p class="example">
        echo strtoupper($my_str);
    </p>
<h3>Execute the function that allows you to transform a text string to lowercase</h3>
    <?php
        echo strtolower($my_str);
        echo '<br>';
    ?>
    <p class="example">
        echo strtolower($my_str);
    </p>
<h3>Execute the function that allows to obtain a text substring from the position</h3>
    <?php
        echo substr($my_str, 5, 4);
    ?>
    <p class="example">
        echo substr($my_str, 5, 4);
    </p>
</body>
</html>