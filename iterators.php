<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iteratos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h3>Generate a snippet that makes use of for</h3>
    <?php
        for ($i = 1; $i <= 10; $i++) {
            echo $i;
        }
    ?>
    <p class="example">
        for ($i = 1; $i <= 10; $i++) {<br>
            echo $i;<br>
        }
    </p>
    <h3>Generate a snippet that makes use of foreach</h3>
    <?php
        $a = array(1, 2, 3, 17);

        foreach ($a as $v) {
            echo "Current value \$a: $v.\n";
        }
    ?>
    <p class="example">
    $a = array(1, 2, 3, 17);<br>

    foreach ($a as $v) {<br>
            echo "Current value \$a: $v.\n";<br>
        }
    </p>
    <h3>Generate a snippet that uses while</h3>
    <?php
        $i = 1;
        while ($i <= 10):
            echo $i;
            $i++;
        endwhile;
    ?>
    <p class="example">
        $i = 1;<br>
        while ($i <= 10):<br>
            echo $i;<br>
            $i++;<br>
        endwhile;
    </p>
    <h3>Generate a snippet that uses do while</h3>
    <?php
        $i = 0;
        do {
            echo $i;
        } while ($i > 0);
    ?>
    <p class="example">
    $i = 0;<br>
do {<br>
    echo $i;<br>
} while ($i > 0);<br>
    </p>
</body>
</html>