<?php
//array_rand
$arr=['a'=>'red','b'=>'green','c'=>'blue','d'=>'yellow'];
$res=array_rand($arr);
$res1=array_rand($arr,2);
print_r($res);
echo "<br>";
echo $arr[$res]; //for single value print
echo "<br>";
 echo $arr[$res1[0]].' '; //for mutiple values of random
 echo $arr[$res1[1]];
 echo "<br>";
//array_shuffle

$arr1=['first','second','third','fourth'];
/*shuffle($arr1);
print_r($arr1);
 echo "<br>";*/
//array_fill_keys
$res2=array_fill_keys($arr1,'testing');
print_r($res2);
 echo "<br>";
 //array_fill
 $res3=array_fill(1,3,'coding');
 print_r($res3);
  echo "<br>";
//array_walk
function fun($value,$key,$p){
  echo "$key $p $value <br>";
}
array_walk($arr,'fun','has the value');
  echo "<br>";
//array_walk_recursive
$arr2=[$arr,'e'=>'purple','f'=>'yellow'];
array_walk_recursive($arr2,'fun','has the value');
  echo "<br>";
//arra_map
$arr3=[2,4,5,6,7];
function square($value){
 return $value*$value;
}
function assign($a,$b){
 return [$b=>$a];
}
function upper($a){
    return strtoupper($a);
}
$res4=array_map('square',$arr3);
print_r($res4);
  echo "<br>";
$res5=array_map('assign',$arr3,$arr1);
print_r($res5);
  echo "<br>";
$res6=array_map(null,$arr3,$arr1);
print_r($res6);
  echo "<br>";
$res7=array_map('upper',$arr);
print_r($res7);


?>