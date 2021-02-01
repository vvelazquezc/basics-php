<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h3>Instance the Date Time class and then invoke the format method with the argument “Y-m-d” to show year-month-day</h3>
    <?php
        $date = DateTime::createFromFormat('j-M-Y', '15-Feb-2009');
        echo $date -> format('Y-m-d');
    ?>
    <p class="example">
        $date = DateTime::createFromFormat('j-M-Y', '15-Feb-2009');
        echo $date -> format('Y-m-d');
    </p>
<h3>Get the current date in any format</h3>
    <?php
        echo "Today is " . date("Y/m/d") . "<br>";
    ?>
    <p class="example">
        echo "Today is " . date("Y/m/d")
    </p>
<h3>Get the current day</h3>
    <?php
        echo "The day is " . date("l") . "<br>";
    ?>
    <p class="example">
        echo "The day is " . date("l") ;
    </p>
<h3>Get the current month in numerical format (1-12)</h3>
    <?php
        echo "The month is " . date("n") . "<br>";
    ?>
    <p class="example">
        echo "The month is " . date("n");
    </p>
<h3>Get the current minute with leading zeros (00 - 59)</h3>
    <?php
        echo "The minute is " . date("i") . "<br>";
    ?>
    <p class="example">
        echo "The minute is " . date("i");
    </p>

</body>
</html>