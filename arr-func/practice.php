<?php
//in_array
//Determine if a value exists in an array when strict type comparison is required, such as distinguishing between integer 1 and string '1'.
$arr=['first','second','third','fourth',1,'@gmail.com'];
$arr1=["a"=>"biscuit","b"=>'toffe',"c"=>'lays',"age"=>'19','country'=>"ind"];
$arr2=[1,2,3,4,5,6,7,8,9,10];

if(in_array('1',$arr,true)){
    echo "string 1";
}
else
if(in_array(1,$arr,true)){
    echo "numeric 1";
}
else{
    echo 'not found';
}
echo "<br>";
if(in_array('10',$arr2,true)){
    echo "integer 10";
}
else{
    echo 'not found';
}
echo "<br>";
// array_search()
if($res=array_search('biscuit',$arr1)){
echo $res;
};
echo "<br>";
$res1=array_search('@gmail.com',$arr);
echo $res1;

echo "<br>";
//array_replace
$age=["age"=>20,'country'=>"pak"];
$res2=array_replace($arr1,$age);
print_r($res2);
echo "<br>";
$arr3=[
    "a"=>['settings'=>'background','theme'=>'dark']
];
$arr4=[
    "a"=>['settings'=>'front','theme'=>'light']
];
$res3=array_replace($arr3,$arr4);
print_r($res3);
echo "<br>";
//array_pop
$arr5th=[1,2,3];
/*foreach($arr5 as $a){
    array_pop($arr5th);
}
print_r($arr5th);
echo "<br>";
$b=[];
foreach($arr5 as $a){
    $b[]=array_pop($arr5th);
}
print_r($b);*/
echo "<br>";
//array_push
$res4=array_push($age,'stu1','12th');
print_r($res4);
echo "<br>";
foreach($arr as $a){
    array_push($age,$a);
}
print_r($age);
echo "<br>";
// array_shft
// foreach($age as $a){
//     $res=array_shift($age);
//     print_r($res);
//     echo " ";
// }
// print_r($age);
echo "<br>";
// array_shift($age);
 print_r($age);
 //array_unshift
 array_unshift($age,"cs");
  print_r($age);
  echo "<br>";
  //array_merge
  $arr5=['country'=>'nepal'];
 $res5=array_merge($age,$arr5);
 print_r( $res5);
   echo "<br>";
   $arr6=[11,12,13];
    $res6=array_merge($arr2,$arr6);
 print_r( $res6);
   echo "<br>";
  //array_merge_recursive
  $res7=array_merge_recursive($arr3,$arr4);
   print_r( $res7);
     echo "<br>";
     //array_combine
   $res8=array_combine($arr5th,$arr6);
   print_r ($res8);
        echo "<br>";
   //array_splice
  $res9=array_slice($arr2,2,3);
  print_r($res9);
       echo "<br>";
  $res10=array_slice($arr2,-2,2,true);
   print_r($res10);
   //array_splice
   array_splice($arr2,-3,3,$arr6);
   print_r($arr2);
    $arr7=[21,22];
       echo "<br>";
   array_splice($arr2,4,3,$arr7);
      print_r($arr2);
?>