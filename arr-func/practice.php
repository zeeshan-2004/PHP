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
    "a"=>['seetings'=>'front','theme'=>'light'],
];
$res3=array_replace($arr3,$arr4);
print_r($res3);
echo "<br>";
//array_pop
$arr5=[1,2,3];
foreach($arr5 as $a){
    array_pop($arr5);
}
print_r($arr5);
echo "<br>";
$b=[];
foreach($arr5 as $a){
    $b[]=array_pop($arr5);
}
print_r($b);
?>