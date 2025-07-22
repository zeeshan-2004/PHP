<?php
$arr1=['a'=>'red','b'=>'green','c'=>'blue','d'=>'yellow'];
$arr2=['a'=>'red','c'=>'green','e'=>'blue'];

$res=array_diff($arr1,$arr2);
print_r($res);
echo "<br>";
$res1=array_diff_key($arr1,$arr2);
print_r($res1);
echo "<br>";
$res2=array_diff_assoc($arr1,$arr2);
print_r($res2);
echo "<br>";

function compare($a,$b){
if($a===$b){
    return 0;
}
return ($a>$b)?1:-1;
}
function comparevalue($a,$b){
   if($a===$b){
    return 0;
}
return ($a>$b)?1:-1; 
}
$res3=array_diff_uassoc($arr1,$arr2,'compare');
print_r($res3);
echo "<br>";
$res4=array_udiff_assoc($arr1,$arr2,'compare');
print_r($res4);
echo "<br>";
$res5=array_diff_ukey($arr1,$arr2,'compare');
print_r($res5);
echo "<br>";
$res6=array_udiff($arr1,$arr2,'compare');
print_r($res6);
echo "<br>";
$res7=array_udiff_uassoc($arr1,$arr2,'compare','comparevalue');
print_r($res7);
echo "<br>";


//array_values  gives all values in assoc array
echo "array_values";
echo "<br>";
$res8=array_values($arr1);
print_r($res8);
echo "<br>";
//array_unique( ) give unique values only
$res9=array_unique($arr1);
print_r($res9);
echo "<br>";
//The array_column() function returns the values from a single column in the input array.
$arr3=[
    ['id'=>'1','username'=>'ali','dep'=>'cs'],
    ['id'=>'2','username'=>'zeeshan','dep'=>'eng'],
    ['id'=>'1','username'=>'haider','dep'=>'phy']
];
$res9=array_column($arr3,'username');
print_r($res9);
echo "<br>";
$res9=array_column($arr3,'username','dep');
print_r($res9);
echo "<br>";
//array_chunk( ) unction splits an array into chunks of new arrays.
$res10=array_chunk($arr1,2,true);
print_r($res10);
echo "<br>";
//array_flip
$res11=array_flip($arr2);
print_r($res11);
echo "<br>";
//array_change_key_case() 
$fin1=array_change_key_case($arr2,CASE_UPPER);
 print_r($fin1);
echo "<br>";
$fin2=array_change_key_case($arr2,CASE_LOWER);
 print_r($fin2);
echo "<br>";
//array_sum
$arr4=[1,2,3,4,5];
$fin3=array_sum($arr4);
 print_r($fin3);
echo "<br>";
//array_product
$fin4=array_product($arr4);
 print_r($fin4);
echo "<br>";


?>