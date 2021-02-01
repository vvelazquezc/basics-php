<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditionals</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h3>Create a simple condition that evaluates whether the current day is Monday. Only in the case that the condition is met, it shows a message of “We are on Monday”.</h3>
    <?php
        $currentDate = date('l');

        if ($currentDate == 'Monday') {
            echo "We are on $currentDate";
        }
    ?>
    <p class="example">
        $currentDate = date('l')<br>

        if ($currentDate == 'Monday') {<br>
            echo "We are on $currentDate"<br>
        }
    </p>

<h3>Create a simple condition that evaluates whether the current month is October. If the condition is met, it shows a message of the type "We are in October". Otherwise, if this condition is not met, show the current month in words as it come from DateTime.</h3>
    <?php
        $currentMonth = date('F');

        if ($currentMonth == 'October') {
            echo "We are on $currentMonth";
        } else {
            $date = new DateTime('NOW');
            echo $date -> format('Y-m-d');
        }
    ?>
    <p class="example">
        $currentMonth = date('F');<br>

        if ($currentMonth == 'October') {<br>
            echo "We are on $currentMonth";<br>
        } else {<br>
            $date = new DateTime('NOW');<br>
            echo $date -> format('Y-m-d');<br>
        }
    </p>
    
    <h3>If the current minute is less than 10. Displays a message of type "the current minute is less than 10", if the current minute is greater than 15, displays a message of the type "the current minute is more than 15". If you do not meet any of the two conditions above: Displays a message of the type "does not meet any conditions”</h3>
    <?php
        $currentMinute = date('i');
        echo "The minute is: $currentMinute <br>";

        if ($currentMinute < '10') {
            echo 'The current minute is less than 10';
        } else if ($currentMinute > '10') {
            echo 'The current minute is less than 15';
        } else {
            echo 'does not meet any conditions';
        }
    ?>
    <p class="example">
        $currentMonth = date('F');<br>

        if ($currentMonth == 'October') {<br>
            echo "We are on $currentMonth";<br>
        } else if ($currentMinute > '10') {<br>
            echo 'The current minute is less than 15';<br>
        } else {<br>
            echo 'does not meet any conditions';<br>
        }
    </p>
    
    <h3>Create a switch type control structure to display a different message depending on the current day of the week. You can write any type of message, because the important thing is that you understand how it works and in what cases you can use it.</h3>
    <?php
        $currentDay = date('l');
        echo "The current day is: $currentDay <br>";

        switch ($currentDay) {
            case 'Mnday':
                echo "Today is Monday <br>";
                break;
            case 'Tuesday':
                echo "Today is Tuesday <br>";
                break;
            case 'Wednesday':
                echo "Today is Wednesday <br>";
                break;
            case 'Thursday':
                echo "Today is Thursday <br>";
                break;
            case 'Friday':
                echo "Today is Friday <br>";
                break;
            case 'Saturday':
                echo "Today is Saturday <br>";
                break;
            case 'Sunday':
                echo "Today is Sunday <br>";
                break;
        }
    ?>
    <p class="example">
        $currentDay = date('l');<br>
        echo "The current day is: $currentDay;<br>

        switch ($currentDay) {<br>
            case 'Mnday':<br>
                echo "Today is Monday;<br>
                break;<br>
            case 'Tuesday':<br>
                echo "Today is Tuesday;<br>
                break;<br>
            case 'Wednesday':<br>
                echo "Today is Wednesday;<br>
                break;<br>
            case 'Thursday':<br>
                echo "Today is Thursday;<br>
                break;<br>
            case 'Friday':<br>
                echo "Today is Friday;<br>
                break;<br>
            case 'Saturday':<br>
                echo "Today is Saturday;<br>
                break;<br>
            case 'Sunday':<br>
                echo "Today is Sunday;<br>
                break;<br>
        }
    </p>
</body>
</html>