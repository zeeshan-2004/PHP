<?php
function fac($a){
    $fic=1;
 for($i=1;$i<=$a;$i++){
   $fic=$fic*$i;
 }
 echo $fic.' ';
}
fac(5);
function prm($a){ 
    for($i=2;$i<$a;$i++){
   if($a%$i==0){
 return false;
   }
   
    }
     return true;
 
   
}
$num=7;
$pr=prm($num);

if($pr){
  echo "$num is prime";
}
  

else{
    echo "number is not prime";
}
echo "<br>";
function upp($a){
  if(strtoupper($a)==$a){
    echo 'string is upper case';
  }
  else{
    echo 'string is not upper';
  }
}
$str='uppercase';
upp($str);
  echo "<br>";
//loops
for($i=1;$i<=5;$i++){
  for($j=1;$j<=$i;$j++){
    echo "*";
  }
  echo "<br>";
}
$n=5;
for($i=1;$i<=$n;$i++){
  for($j=1;$j<=$i;$j++){
     echo "*";
   
  }
  echo "<br>";
}
for($i=$n;$i>=1;$i--){
  for($j=$i;$j>=1;$j--){
    echo "*";
  }
   echo "<br>";
}
   echo "<br>";
   $num=9;
   for($i=0;$i<=$num;$i++){
    for($j=0;$j<=$num;$j++){
      echo "$i$j".',';
    }
    echo "<br>";
   }
   echo "<br>";
?>
