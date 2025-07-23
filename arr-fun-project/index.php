<?php
echo "<b>Grocery List Manager</b> ";
echo "<br>";
echo "Initial  List";
echo "<br>";
$gro=['milk','biscuit','eggs','breads'];
print_r($gro);
echo "<br>";
echo " Add New Items";
echo "<br>";
$nwit=['milk','noodels','flour','eggs'];
print_r($nwit);
echo "<br>";
echo "merge items";
echo "<br>";
$res=array_merge($gro,$nwit);
print_r($res);
echo "<br>";
echo "Remove Duplicates";
echo "<br>";
$res1=array_unique($res);
print_r($res1);
echo "<br>";
echo " Sort Alphabetically";
echo "<br>";
sort($res1);
print_r($res1);
echo "<br>";
echo " Count Total Items";
echo "<br>";
$res2=count($res1);
print_r($res2);
echo "<br>";
echo "Check If an Item Exists"." ";
echo "<br>";
if(in_array('milk',$res1)){
    echo "yes";
}
else{
    echo "no";
}
echo "<br>";
echo " Remove a Specific Item";
echo "<br>";
$res3=array_search('milk',$res1);
unset($res1[$res3]);
$res4=array_values($res1);
 print_r($res4);
 echo "<br>";
 echo "Convert to a String";
 echo "<br>";
 $res5=implode(',',$res4);
 echo $res5;
?>
