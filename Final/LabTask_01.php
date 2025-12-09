<?php
$string_var = "Tanha";
$int_var = 10;
$float_var = 2.5;
$bool_var = true;

$add = $int_var + $float_var;
$sub = $int_var - $float_var;
$mult = $int_var * $float_var;
$div = $int_var / $float_var;

echo "String Variable: $string_var<br>";
echo "Integer Variable: $int_var<br>";
echo "Float Variable: $float_var<br>";
echo "Boolean Variable: $bool_var<br><br>";

echo "Addition: $add<br>";
echo "Subtraction: $sub<br>";
echo "Multiplication: $mult<br>";
echo "Division: $div<br><br>";

$num1 = 10;
$num2 = 20;
$sum = $num1 + $num2;

echo "Sum using echo: $sum<br>";
print "Sum using print: $sum<br><br>";


var_dump($string_var);
echo "<br>";
var_dump($int_var);
echo "<br>";
var_dump($float_var);
echo "<br>";
var_dump($bool_var);
echo "<br>";
?>


