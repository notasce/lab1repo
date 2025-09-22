<?php
$a = 10;
$b = 5;

// Arithmetic Operators
echo "Arithmetic Operators:<br>";
echo "$a + $b = " . ($a + $b) . "<br>";
echo "$a - $b = " . ($a - $b) . "<br>";
echo "$a * $b = " . ($a * $b) . "<br>";
echo "$a / $b = " . ($a / $b) . "<br>";
echo "$a % $b = " . ($a % $b) . "<br><br>";

// Comparison Operators
echo "Comparison Operators:<br>";
echo "$a == $b : " . var_export($a == $b, true) . "<br>";
echo "$a != $b : " . var_export($a != $b, true) . "<br>";
echo "$a > $b : " . var_export($a > $b, true) . "<br>";
echo "$a < $b : " . var_export($a < $b, true) . "<br>";
echo "$a >= $b : " . var_export($a >= $b, true) . "<br>";
echo "$a <= $b : " . var_export($a <= $b, true) . "<br><br>";

// Logical Operators
echo "Logical Operators:<br>";
echo "($a > 0 && $b > 0) : " . var_export(($a > 0 && $b > 0), true) . "<br>";
echo "($a > 0 || $b < 0) : " . var_export(($a > 0 || $b < 0), true) . "<br>";
echo "!($a == $b) : " . var_export(!($a == $b), true) . "<br>";
?>