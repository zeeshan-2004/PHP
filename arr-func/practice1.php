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
//array-diff()
$arr1=['ahmad','ahsan','arslan','ali','nauman',10];
$arr2=['ahmad','ahsan','nauman','10'];
$res3=array_diff($arr1,$arr2);
print_r($res3);
echo "<br>";
$arr3=['biscuit'=>'10','toffe'=>'20','nimko'=>'30kg','botel'=>'30lit'];
$arr4=['biscuit'=>'10','toffe'=>'30','nimko'=>'20kg'];
$res4=array_diff_assoc($arr3,$arr4);
print_r($res4);
echo "<br>";
$res4=array_diff_key($arr3,$arr4);
print_r($res4);
echo "<br>";
function compare($a,$b){
if($a===$b){
    return 0;
}
return ($a>$b)?1:-1;
}
function comparevalues($a,$b){
if($a===$b){
    return 0;
}
return ($a>$b)?1:-1;
}
$res5=array_udiff($arr1,$arr2,'compare');
print_r($res5);
echo "<br>";
$res6=array_udiff_uassoc($arr3,$arr4,'compare','comparevalues');
print_r($res6);
echo "<br>";
//array_value
$arr5=['1'=>'ali','2'=>'ahamd','third'=>'zeeshan','4'=>'nauman','5'=>'ali'];
$res7=array_values($arr5);
$x=[];
foreach($res as $a){
    if(gettype($res7)!==''){
    $x[]=$a;
    }
}
print_r($res7);
echo "<br>";
//array_unique
$res8=array_unique($arr5);
print_r($res8);
echo "<br>";
//array_column()
$arr6=[
    ['id'=>101, 'name'=>'Mouse', 'price'=>500],
    ['id'=>102, 'name'=>'keyboard', 'price'=>800],
    ['id'=>103, 'name'=>'mobile', 'price'=>900]
];
$res9=array_column($arr6,'price','name');
print_r($res9);
echo "<br>";
//array_chunk
$fin1=array_chunk($arr1,2);
foreach($fin1 as $a=>$b){
      $groupId = "Group " . ($a + 1);
    echo $groupId . ":\n";
  foreach ($b as $student) {
        echo " - " . $student . "\n";
    }

}
echo "<br>";
//array_flip()
$fin3=array_unique($arr5);
   if($fin3){
   $fin2=array_flip($arr5);
    }
   else{
    echo "cuplicate value";
   }
print_r($fin2);
echo "<br>";
// array_change_key_case() 
$fin4= array_change_key_case($arr5,CASE_LOWER) ;
print_r($fin4);
echo "<br>";
//array_sum
$employees = [
    [
        "sales" => [1200, 1350, 1420, 1500, 1600, 1700, 1800, 1750, 1600, 1500, 1400, 1300]
    ],
    [
        "sales" => [1000, 1100, 1050, 1150, 1200, 1250, 1300, 1280, 1270, 1250, 1200, 1100]
    ],
    [

        "sales" => [900, 950, 980, 1000, 1100, 1150, 1170, 1180, 1190, 1170, 1130, 1100]
    ]
];
$total=0;
foreach ($employees as $emp) {
    $total+= array_sum($emp['sales']);
}
echo ($total);
echo "<br>";

?>