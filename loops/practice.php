<?php

$N = 5;

$square = 0;
$odd = 1;

for ($i = 0; $i < $N; $i++) {
    $square += $odd;
    echo $square . "\n";
    $odd += 2;
}
 echo "<br>";
//foreach loop
$st=array("ali"=>"30" ,"asad"=>"50" ,"ahmad"=>"70");
foreach($st as $a=>$b){
 echo "marks of $a is $b <br>";

}
 echo "<br>";
 $ev=array(3,8,5,12,7,6);
 foreach($ev as $a){
    if($a%2==0){
        $e=$a*2;
         
    }
    else{
        $e=$a;
    }
      echo "$e <br>";
 }
 echo "$e <br>";
 $words = array("apple", "banana", "orange", "umbrella", "grape", "ice");
 $v=array('a', 'e', 'i', 'o', 'u');
foreach($words as $y){
    if($y[0]=="a" ||$y[0]=="e" ||$y[0]=="i" ||$y[0]=="o" ||$y[0]=="u"){
    echo "$y<br>";
   }
   
}
?>

