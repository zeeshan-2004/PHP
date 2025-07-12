<?php
// while loop
echo "while loop";
  echo "<br>";
$i=1;
while($i<=5){
    echo $i;
    echo "<br>";
    $i++;

}
 echo "<br>";
 $b=1;
while($b<=5){
    echo $b;
    echo "<br>";
    $b+=2;

}
// loops 
 echo "<br>";
 for ($i=1; $i<=5 ; $i++) { 
    echo "this is for loop $i <br>";
 }
 echo "<br>";
 echo "this is do while";
  echo "<br>";
 $c=90;
 do{
    echo "value of c is:$c <br>";


 }
 while($c<=5); 
  echo "<br>";

 //foreach loop
 $arr=array("red","green","blue","pink");
//  for ($i=0; $i<count($arr); $i++) { 
//     echo $arr[$i];
//      echo "<br>";
//  }
foreach($arr as $x){
    echo $x;
     echo "<br>";
}
?>