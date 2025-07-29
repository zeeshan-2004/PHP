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


?>