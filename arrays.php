<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>


<?php
//Define a simple array composed of text strings
$arr= array('hello', 'hola');
print_r($arr);
echo '<br>';
//Define a simple array consisting of whole numbers and decimal numbers
$arrn= array(6, 3.2,4);
print_r($arrn);
echo '<br>';

//Define a multidimensional array
$matriz = array(
  array('fila 1 col 1', 'fila 1 col 2'),
  array('fila 2 col 1', 'fila 2 col 2')
);
print_r ($matriz);
echo '<br>';
//Execute the function that allows to obtain the length of an array
echo count($arr);
echo '<br>';

//Execute the function that allows to obtain the combination of two arrays
print_r (array_merge($arr, $arrn));
echo '<br>';


//Execute the function that once is given an array return the last element of it
$last = array_pop($arrn);
echo ($last);
echo '<br>';

//Execute the function that once is given an array add a new element to the array in question
array_push($arrn,$last);
print_r ($arrn);
?>


</body>
</html>