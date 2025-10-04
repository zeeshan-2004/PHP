<?php
$arr=['1'=>'ali','2'=>'zeeshan','3'=>'ahmad','4'=>'hassan'];
$res=array_rand($arr,3);
print_r($res);
echo "<br>";
$arr1=['first','second','third','fourth'];
$res1=array_fill_keys($arr1,'read');
print_r($res1);
echo "<br>";
$res2=array_fill(1,3,'0');
print_r($res2);
echo "<br>";
$arr2=['a'=>20,'b'=>400,'c'=>50];
$arr3=[$arr,'5'=>'murtaza'];
function fun($a,$b){
  if($a>100){
    $a=0;
    echo'price is'. $a.' '.$b;
  }
}
function rec($a,$b){
  if(is_string($a)){
 echo strtoupper($a)." ";
  }
  
}
array_walk($arr2,'fun');
print_r($arr2);
echo "<br>";
array_walk_recursive($arr3,'rec');
print_r($arr3);
echo "<br>";
$arr4=[30,40,60];
function cel($a){
    $cel=($a*9/5)+32;
    return $cel;
}
$res3=array_map('cel',$arr2);
print_r($res3);
echo "<br>";
function sum($a,$b){
  return $a+=$b;
}
$fin=array_reduce($arr4,'sum');
print_r($fin,);
echo "<br>";
$arr5=[10,20.5,90,50.7,100];
/*sort($arr5);
print_r($arr5);
echo "<br>";*/
// rsort($arr5);
// print_r($arr5);
// asort($arr);
// print_r($arr);
// arsort($arr);
// print_r($arr);
$arr6=['1'=>'ali','4'=>'zeeshan','3'=>'ahmad','8'=>'hassan'];
// ksort($arr6);
// print_r($arr6);
krsort($arr6);
print_r($arr6);
echo "<br>";
//methods
$names=["Alice", "Bob", "Charlie", "David", "Eve"];
 $student = ["ali" => 300, "ahmad" => 200, "hassan" =>500];
 $numbers = [10, 45, 32, 67, 28];
array_push($names,"ahsan","zeeshan","hanan");
print_r($names);
$del=array_splice($names,-1,1);
print_r($del);
$del1=array_splice($names,0,1);
print_r($del1);
array_splice($names,0,0,"first");
print_r($names);
if(in_array("first",$names)!=false){
 echo "first has found";     
}
if(in_array($student["ahmad"],$student)!=false){
 echo "ahmad has found";    
}
$res=array_keys($student);
print_r($res);
$res1=array_reverse($numbers);
print_r($res1);
echo "<br>";
$res2=array_merge($numbers,$names);
print_r($res2);
$res3=array_chunk($numbers,2);
print_r($res3);
$res4=array_diff($names,$arr1);
print_r($res4);
$res5=array_intersect($numbers,$arr5);
print_r($res5);
$res6=array_slice($arr5,3);
print_r($res6);
array_splice($names,0,2,$arr);
print_r($names);
$res7=array_keys($arr);
print_r($res7);
$res8=array_values($arr);
print_r($res8);
$lat=array_fill(0,3,"red");
print_r($lat);
$res9=range(1,10);
print_r($res9);
?>