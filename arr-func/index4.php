<?php
//traversing()
$arr1=['first','second','third','fourth'];
echo current($arr1);
echo "<br>";
echo key($arr1);
echo "<br>";
next($arr1);
echo current($arr1); //second
prev($arr1);
echo "<br>";
echo current($arr1); //first
echo "<br>";
end($arr1);
echo current($arr1); //fourth
echo "<br>";
reset($arr1);
echo current($arr1);
echo "<br>";
//list()
$arr2=[0=>'blue',1=>'green',2=>'purple'];
list($x,$y,$z)=$arr2;
// list(,$b,)=$arr2;//for single value
// list($x[0],$x[1],$x[2])=$arr2; also store in new array
// list($x[0],$x[1],$x[2])=$arr2; also store in new array
// list($x[0],,$x[1])=$arr2; also store specific value 

echo "value of $x  <br>";
echo "value of $y  <br>";
echo "value of $z  <br>";

//extract()
$a='orange';
$arr=['a'=>'apple','b'=>'green','c'=>'blue','e'=>'pink','d'=>'yellow'];
// extract($arr);
extract($arr);
echo "value of a: $a <br>";
// echo "value of a: $same_a <br>";prefix
echo "value of b: $b <br>";
//compact()
$name='zeeshan';
$age=21;
$gender='male';
$res1=compact('name','age','gender');
print_r($res1);
echo "<br>";
//range()
$res2=range(1,20);
print_r($res2);
echo "<br>";
$res3=range(0,100,10);
print_r($res3);
echo "<br>";
$res4=range('a','k');
print_r($res4);
echo "<br>";
$res4=range('l','a');
print_r($res4);
echo "<br>";
foreach($res4 as $a){
    echo $a.' ';
}
?>