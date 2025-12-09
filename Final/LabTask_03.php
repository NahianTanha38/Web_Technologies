<?php
echo "For Loop<br>";
for ($x = 0; $x <= 10; $x++) {
 echo "$x <br>";
}


echo "While Loop<br>";
$x = 1;
while ($x <= 20) {
    if ($x % 2 == 0) {
        echo "$x<br> ";
    }
    $x++;
}

echo "Array<br>";
$fruits = [
    "apple" => "red",
    "banana" => "yellow",
    "grape" => "purple",
    "orange" => "orange",
    "mango" => "green"
];


$i = 0;

foreach ($fruits as $fruit => $color) {
  echo "$fruit : $color <br>";

  $i++;
  if ($i == 5) {
      break;
  }
}

?>