<?php 
echo "this is variables";
$name="zeeshan";
$age="21";
echo "<br>my name is $name and my age is $age<br>";
echo "Hello, {$name}! <br>";
echo "hello ".$name;
echo "<br>";
$float=78.9;
$floatN=-2.5;
echo $float;
echo "<br>";
echo $floatN;
echo "<br>";
$tr=true;
$fa=false;
echo $tr;
echo "<br>";
echo $fa;
echo "<br>";
//constant variable
//define(name, value);
define("name","zeeshan");
echo name;
echo "<br>";
const age=22;
echo age;
echo "<br>";
// var_dump() for data type and value of variable
var_dump($fa);
echo "<br>";
var_dump($float);
//define array
$arr=array("first","second","third");
echo "<br>";
var_dump($arr);
echo "<br>";
var_dump($arr[0]);
echo "<br>";
echo $arr[0]; //onyl value
echo "<br>";
var_dump($arr[1]);
echo "<br>";
//echo $arr[3];  give undefined as length is 2
$nu=null;
$nu1;
var_dump($nu);
echo "<br>";
var_dump($nu1);

?>