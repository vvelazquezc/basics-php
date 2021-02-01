<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//It generates a function that given two numbers returns the sum of both
function increment($num1, $num2){
  return $num1 + $num2;
}
echo "1 + 2 = " . increment(1,2);
echo '<br>';

//It generates a function that given two numbers returns the multiplication of both
function mult($num1, $num2){
  return $num1 * $num2;
}

echo "1 * 2 = ".mult(1,2);
echo '<br>';

//It generates a function that given two numbers returns the division of both
function div($num1, $num2){
  return $num1 / $num2;
}
echo "1 / 2 = ".div(1,2);
echo '<br>';
//It generates a function that, given two numbers and an operation (add, multiply or divide), returns the result of that operation.
function choseOperation($num1, $num2, $variable){
  switch ($variable) {
    case 'add':
      return increment($num1,$num2);
      break;
    case 'multiply':
      return mult($num1,$num2);
      break;
    case 'divide':
      return div($num1,$num2);
      break;
    default:
      return 'this operation doesn´t exist';
      break;
  }
}
echo "1 add(+) 2 = ".choseOperation(1,2,'add');
echo '<br>';
?>
</body>
</html>