<?php
$name="zeeshan";
$age=21;
$height=4;
echo $name;
echo "<br>";
echo $age;
echo "<br>";
echo $height;
echo "<br>";
echo gettype($name);
echo "<br>";
echo gettype($age);
echo "<br>";
echo gettype($height);
echo "<br>";
//swapping 
$x=5;
$y=9;
echo "value of x is $x and $y";
echo "<br>";
$x=$x+$y;
$y=$x-$y;
$x=$x-$y;
echo "value of x is $x and $y";
echo "<br>";

$z=10;
echo $z;
echo "<br>";
$z=4.4;
echo $z;
echo "<br>";

//constant variables
define("name","zeeshan");
echo name;
echo "<br>";

const age=22;
echo age;

?>
