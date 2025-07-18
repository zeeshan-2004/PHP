<?php
$food=['banana','apple','orange','mango',10];
$arr=array(array('first','second'),array("third",'fourth'));
$arr1=["a"=>10,"b"=>'20',"c"=>'30'];
//in_array search array and return true or false
echo in_array('apple',$food); // 1
echo "<br>";

if(in_array(10,$food,true)){  
    echo "successfully find";
}
else{
    echo 'not find';
}
echo "<br>";
if(in_array(array('first','second'),$arr)){  
    echo "successfully find";
}
else{
    echo 'not find';
}
echo "<br>";
//array_search search array and give index no in index aray and key in associative
echo array_search('orange',$food); //2
echo "<br>";
echo array_search(10,$arr1); //a 
echo "<br>";
/*The array_replace() function replaces the values of the first array with the values from following arrays.
usually used with index and associative */
$arr2=['first','second','thrird'];
print_r(array_replace($arr2,$food));
echo "<br>";
$arr3=['red','green','blue'];
$fin=array_replace($food,$arr2,$arr3);
print_r($fin);
echo "<br>";
$fin1=array_replace($arr,$arr1);
print_r($fin1);
echo "<br>";
//The array_replace_recursive() used for multidemension assocaitive array
$arr4=[
    "a"=>['small'],
    'b'=>['now',]
];
$arr5=[
    "a"=>['first',],
    'c'=>['where',]

];
$fin2=array_replace_recursive($arr4,$arr5);
print_r($fin2);
?>