<?php
function mess(){
    echo "hello world";
}
mess();
echo "<br>";

function para($h){
    echo "hello $h";
    echo "<br>";

}
$m="alice";
para($m);

  echo "<br>";
  function ret($a,$b){
   $c=$a+$b;
   return $c;
  }
  $n=ret(3,4);
  echo $n;
    echo "<br>";

function prime($a){
     if($a<=1){
    return "false";
  }
 for($b=2;$b<$a;$b++){
 
    if($a%$b==0){
        return "false";
    }

 }
 return "true";

   
}
$x=prime(13);
echo $x;
  echo "<br>";

function maxArr($a){
$z=$a[0];
for ($i=0; $i <count($a) ; $i++) { 
    if($a[$i]>$z){
        $z=$a[$i];
    }
}
return $z;
}
$y=[10,20,30,90,40,80];

$s=maxArr($y);
echo $s;
 echo "<br>";

 function cap($a,$b){
 if($a[0]!=ucfirst($a) || $b[0]!=ucfirst($b)){
    $x= ucfirst($a);
    $y=ucfirst($b);
  return $x."  ".$y;
 }
 }
 $d=cap("ahsan", "ali");
 echo $d;
 //call by value
 function val($a){
$a="hy";
echo $a;
 }
 $b="hello";
val($b);
echo $b;
echo "<br>";
//practice

function sumdigit($a){
$sum=0;
  $b=str_split($a);
foreach($b as $c){
  $sum=$c+$sum;
}
echo "$sum  ";
}
sumdigit(3456);
function even($a){
if($a%2==0){
  echo "true  ";
}
else{
  echo "false  ";
}
}
even(11);
function fic($a=5){
$fic=1;

   for($i=1;$i<=$a;$i++){
    $fic=$i*$fic;
   }
   echo "fictorial of $a is $fic ";
}
fic();
function greet($name){
echo "hello $name ";
}
function bye($name){
  echo "hello $name ";
}
$fun1="greet";
$fun2="bye";
$fun1("zeeshan");
$fun2("ali");
function fib($a){
$pre=0;
$post=1;
for($i=0;$i<$a;$i++){
 $curr=$pre+$post;
$pre=$post;
$post=$curr;
}
echo "$pre";
}
fib(6);
?>