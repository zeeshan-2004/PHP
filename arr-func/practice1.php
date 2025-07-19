<?php
//array_keys
$arr=['pak'=>'rupees','india'=>'indrupees','america'=>'usd',1,2,3,4];
$res=array_keys($arr);
print_r($res);
//Given a list of countries with their currencies, return the keys (country names) where the currency is "USD".
foreach($res as $a){
    if($a=='america'){
        print_r($arr[$a]);
    }
}
echo "<br>";
//Given an array with both string and numeric keys, write a function that returns only the numeric keys.
$b=[];
foreach($res as $a){
    if(gettype($a)!=='string'){
      $b[]=$a+1;
    }
 
}
print_r($b);
echo "<br>";
 //array_key_exists()
 //Create a function that verifies if the mutiple specific keys  exist in a  array.
 $c=false;
 $arr1=['india','pak','america'];
foreach($arr1 as $a){
    if(array_key_exists($a,$arr)){
        $c=true;
    }
    
}
echo $c;
echo "<br>";
//array_key_first()
$res1=array_key_first($arr);
print_r($res1);
echo "<br>";
//array_key_first()
$res2=array_key_last ($arr);
print_r($res2);
echo "<br>";
?>