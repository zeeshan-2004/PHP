<?php
// Arithmetic Operators 
// Calculate their sum using +. What will be the output?
$a = "5 apples";  //give warning as string has non-numeric value as php treat numeric 
 $b = "3 oranges";    //because arthmitc operaor
echo $a + $b;
echo "<br>";

//echo 10 / 0; give error

//Assignment Operators 
$a = 5;
$b = ($a += 3) * ($a -= 1);
echo $b;
 echo "<br>";

$x = 4;
$x += $x -= $x * 2; 
echo $x;
echo "<br>";

//Comparison Operators;
var_dump(0 == "hello");
var_dump(0 === "hello");
echo "<br>";

$a = "0";
$b = 0;
$c = false;

echo ($a == $b) ? "1" : "0";
echo ($b == $c) ? "1" : "0";
echo ($a == $c) ? "1" : "0";
echo "<br>";
// Increment / Decrement Operators
$a = 5;
echo $a++ + ++$a;
echo "<br>";
$i = 1;
$j = $i++ + $i++ + ++$i;
echo $j;
echo "<br>";
// Logical Operators
$a = false && true;
$b = false and true;
var_dump($a, $b);
echo "<br>";
$x = true || false;
$y = true or false;
var_dump($x, $y);
echo "<br>";
 // Ternary Operator
 $a = 0;
$b = "false";
echo $a ? $b : "true";
?>