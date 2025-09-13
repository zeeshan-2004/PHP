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
echo "<br>";
//practice
//swap
$a = 15;
$b = 30;
$a=$a+$b;//45
$b=$a-$b;//15
$a=$a-$b;//30
echo "value of a is $a and value of b is $b";
echo "<br>";
$x="name";
$$x="zeeshan";
echo $name."<br>";
echo $$x;
echo "<br>";
$arr=['zeeshan',"ahmad","ali"];
for($i=0;$i<count($arr);$i++){
    $varname="student".($i+1);
    $$varname=$arr[$i];
}
echo $student1." ".$student2." ".$student3."<br>";
//typecasting
$num = "150";
$intnum=(int)$num;
echo gettype($num);
echo "<br>";
echo gettype($intnum);
?>
