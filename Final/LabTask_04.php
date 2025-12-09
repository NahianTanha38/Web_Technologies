<?php
function add($a, $b) {
 return $a + $b;
}
echo add(1,2);

function factorial($n) {
    if ($n <= 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}

echo "<br>";
echo "Factorial of 5 = ".factorial(5);

function is_prime($n) {
 for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
echo "<br>";
$numbers = [5,4,3];

foreach ($numbers as $num) {
    if (is_prime($num)) {
        echo "$num is prime<br>";
    } else {
        echo "$num is not prime<br>";
    }
}


?>
