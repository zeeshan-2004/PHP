<?php
$a=20;
$b=10;
// arthmetic operators
echo "sum is :".($a+$b)."<br>";
echo "subtraction is :".($a-$b)."<br>";
echo "multiplaction is :l".($a*$b)."<br>";
echo "divsion is :".($a/$b)."<br>";
echo "mudulation is :".($a%$b)."<br>";
echo "a**b is :".($a**$b)."<br>";

// assignment arthemitic operator
$c=30;
$d=30;
$e=40;
echo "plus is :".($a+=20)."<br>";
echo "subtraction is :".($b-=20)."<br>";
echo "divsion is:".($c/=20)."<br>";
echo "multiplaction is  :".($d*=20)."<br>";
echo "mudulation is :".($e%=20)."<br>";
echo "mudulation is :".($e%=20)."<br>";

//comparison operators
$x=10;
$y=30;
echo "x==y is ";
echo var_dump($x==$y);
echo "<br>";

echo "x<=y is ";
echo var_dump($x<=$y);
echo "<br>";
echo "x>=y is ";
echo var_dump($x>=$y);
echo "<br>";
echo "x!=y is ";
echo var_dump($x!=$y);
echo "<br>";

//logical operator
$m=true;
$n=false;
echo "m $$ n is ";
echo var_dump($m && $n);
echo "<br>";
echo "m || n is ";
echo var_dump($m || $n);
echo "<br>";
echo "!n is ";
echo var_dump(!$m);
echo "<br>";
?>