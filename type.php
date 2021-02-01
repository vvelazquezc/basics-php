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
    <h3>boolean</h3>
    <?php
        $boolean = True;

        echo "$boolean";
    ?>
    <p class="example">
        $boolean = True;<br>
        echo "$boolean";
    </p>
    <h3>integer</h3>
    <?php
        $integer = 12345;

        echo "$integer";
    ?>
    <p class="example">
        $integer = 12345;<br>
        echo "$integer";
    </p>
    <h3>float</h3>
    <?php
        $float = 12.345;

        $float = 12.345;
    ?>
    <p class="example">
        $float = 12.345;<br>
        $float = 12.345;
    </p>
    <h3>string</h3>
    <?php
        $string = "This is a example ";

        echo "$string";
    ?>
    <p class="example">
        $string = "This is a example'";<br>
        echo "$string";
    </p>
    <h3>array</h3>
    <?php
        $array = ['example1', 'example2', 'example3'];

        echo "$array";
    ?>
    <p class="example">
        $array = ['example1', 'example2', 'example3'];<br>
        echo "$array";
    </p>
    <h3>object</h3>
    <?php
        $obj = (object) 'example';
        echo $obj -> scalar
    ?>
    <p class="example">
        $obj = (object) 'example';<br>
        echo $obj -> scalar
    </p>
    <h3>NULL</h3>
    <?php
        $example = NULL;
    ?>
    <p class="example">
        $example = NULL;
    </p>

</body>
</html>