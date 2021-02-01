<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h3>Define a variable whose value is the result of the function that returns an absolute value.</h3>
    <?php
        echo abs(-4.2);
    ?>
    <p class="example">
        echo abs(-4.2);<br>
    </p>

    <h3>Define a variable whose value is the result of the function that returns a rounded value to the next highest integer.</h3>
    <?php

        $round = 6.4;
        echo round($round);
        echo '<br>';
    ?>
    <p class="example">
        $round = 6.4;<br>
        echo round($round);<br>
    </p>

<h3>Define a variable whose value is the result of the function that returns the highest value of a series of values ​​that are received by parameter.</h3>
<?php

    $arr = array(2, 4, 19, 66, 90);
    echo max($arr);
    echo '<br>';
?>
<p class="example">
    $arr = array(2, 4, 19, 66, 90);<br>
    echo max($arr);
</p>

<h3>Define a variable whose value is the result of the function that returns the lowest value of a series of values ​​that are received by parameter.</h3>
<?php

    echo min($arr);
    echo '<br>';
?>
<p class="example">
    
    echo min($arr);<br>
</p>

<h3>Define a variable whose value is the result of the function that returns a random number.</h3>
<?php

echo rand();
    echo '<br>';
?>
<p class="example">
    
echo rand();<br>
</p>

</body>
</html>