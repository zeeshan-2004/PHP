<?php
echo "key functions";
echo "<br>";
//The array_keys() function returns an array containing the keys.
$arr1=["a"=>10,"b"=>'20',"c"=>'30'];
$res=array_keys($arr1);
print_r($res);
echo "<br>";
//The array_keys_first() function returns first key
$res1=array_key_first($arr1);
print_r($res1);
echo "<br>";
//The array_keys_last() function returns last key
$res2=array_key_last($arr1);
print_r($res2);
echo "<br>";
//The array_keys_exist() and array_keys() function returns true or false
$res3=array_key_exists('c',$arr1);
if($res3){
    echo "key exist";
}
else{
     echo "key not exist";
}
$res3=key_exists('b',$arr1);
print_r($res3);
echo "<br>";
echo "intersct func";
echo "<br>";
//array_intersect() takes common values
$arr2=["a"=>'red','b'=>'20','d'=>'blue','e'=>'30'];
$arr3=['first'=>'honda','second'=>'ciciv','third'=>'20'];
$res4=array_intersect($arr1,$arr2);  //20,30
print_r($res4) ;
echo "<br>";
//array_intersect_key() takes  common key "return first array values"
$res5=array_intersect_key($arr1,$arr2);  //10 ,20
print_r($res5);
echo "<br>";
//array_intersect_assoc() takes  common both key and its value 
$res6=array_intersect_assoc($arr1,$arr2);  //20
print_r($res6);
echo "<br>";
//array_intersect_uassoc() compares takes  common both key and its value  according user defined function 
echo "array_intersect_uassoc";
function compare($a,$b){
if($a===$b){
    return 0;
}
return ($a>$b)?1:-1;
}
$res7=array_intersect_uassoc($arr1,$arr2,"compare");  // 20
print_r($res7);
echo "<br>";
//array_intersect_ukey() takes  common key "return first array values" according user defined function

$res8=array_intersect_ukey($arr1,$arr2,"strcasecmp");  // 10,20
print_r($res8);
echo "<br>";
//array_uintersect() takes common values according user defined function
//array_uintersect_uassoc() takes  common both key and its value 
function compare2($a,$b){
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
$res9=array_uintersect_uassoc($arr1,$arr2,"compare","comparevalue");  // 20
print_r($res9);
echo "<br>";
echo "intercept problems";
$pers1=['name'=>'zeeshan','hobies'=>'cricket','study'=>'graduation','location'=>'faisalabad','DEP'=>'cs','institute'=>'gcuf'];
$pers2=['name'=>'ali','hobies'=>'cricket','study'=>'GRADUATION','Location'=>'Faisalabad','dep'=>'cs','INSTITUTE'=>'GCUF'];
$res3=array_intersect($pers1,$pers2);
print_r($res3);
echo "<br>";
$res3=array_intersect($pers1,$pers2);
print_r($res3);
echo "<br>";

$res4=array_intersect_assoc($pers1,$pers2);
print_r($res4);
echo "<br>";
$res4=array_intersect_key($pers1,$pers2);
print_r($res4);
echo "<br>";
$res4=array_intersect_ukey($pers1,$pers2,'strcasecmp');
print_r($res4);
echo "<br>";
$res5=array_intersect_uassoc($pers1,$pers2,'strcasecmp');
print_r($res5);
echo "<br>";
$res6=array_uintersect_assoc($pers1,$pers2,'strcasecmp');
print_r($res6);
echo "<br>";
$res6=array_uintersect_uassoc($pers1,$pers2,'strcasecmp','strcasecmp');
print_r($res6);
echo "<br>";
?>