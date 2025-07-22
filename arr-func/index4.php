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
//problems
//traversing
$fruits = ["apple", "banana", "cherry", "date"];
foreach($fruits as $a){
    echo current($fruits).' ';
  next($fruits);

}
echo "<br>";
    end($fruits);
foreach($fruits as $a){
   echo current($fruits).' ';
    prev($fruits);

}
echo "<br>";
$users = [
    ["Alice", "Admin"],
    ["Bob", "Editor"],
    ["Charlie", "Subscriber"]
];
foreach($users as list($a,$b)){
 echo "name:$a ,role:$b <br>";
}
echo "<br>";
$student = ["name" => "Alice", "grade" => "A"];
$extra = ["name" => "Ali", "subject" => "Math"];
extract($student, EXTR_PREFIX_ALL,'fir');
echo "the grade of $fir_name is $fir_grade <br>";
extract($extra,EXTR_PREFIX_ALL,'sec');
echo "the subjecct of $sec_name is $sec_subject";
echo "<br>";
$name = "Tom";
$age = 22;
$city = "Paris";
$lat=compact('name',"age","city");
print_r($lat);
echo "<br>";
$lat1=range('A','Z');
foreach($lat1 as $a){
   $lat2=$a.$a.' ';
    print_r($lat2);
}
?>