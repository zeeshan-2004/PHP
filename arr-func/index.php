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
echo "<br>";
// array_pop( ) delte last element of array
array_pop($arr3);
print_r($arr3);
echo "<br>";
//array_push will add elements in last
array_push($arr3,"pink","purple");
print_r($arr3);
echo "<br>";
//array_shift will reomve first element 
array_shift($arr3);
print_r($arr3);
echo "<br>";
//array_unshift add elements in start
$ab=array_unshift($arr3,"grey","black");
print_r($arr3);
print_r($arr3);
echo "<br>";
//array_merge  ( ) will merge two arrays
$arr6=['mobile','tablet'];
$newar=array_merge($arr2,$arr3,$arr4);// index and mutidimension
$newar1=array_merge($arr2,$arr3,$arr1);// index andassociative
$newar2=array_merge($arr4,$arr5);// associative itslf
$newar3=$arr2+$arr3; //can also join
print_r($newar);
echo "<br>";
print_r($newar1);
echo "<br>";
print_r($newar2);
echo "<br>";
print_r($newar3);
echo "<br>";
//array_merge_recursive  ( ) 
$newar4=array_merge_recursive($arr4,$arr5);
print_r($newar4);
echo "<br>";
//array_combine ()
$arr7=['men','women'];
$newar5=array_combine($arr6,$arr7);
print_r($newar5);
echo "<br>";
//array_slice extract specific array elements 
$lastar=['honda','civic','cultus','meridies','mehran','corola'];
$latestar=array_slice($lastar,2,3);
print_r($latestar);
echo "<br>";
$latestar1=array_slice($lastar,-3,3,true);
print_r($latestar1);
echo "<br>";
//array_splice() delte or replace specfic array elements (detail in js note)
$lastar1=['lemozine','daewoo','wagnor'];
// array_splice($lastar,2,1);
// array_splice($lastar,2,-1);//delete till last term
// array_splice($lastar,-1);//delete only last term
//  array_splice($lastar,0,2,$lastar1); // will replaace first two value
//  array_splice($lastar,0,count($lastar),$lastar1); // will replaace all values 
//  array_splice($lastar,2,0,$lastar1); // will replaace  values after 2nd index and nothing delted 
//  array_splice($lastar,0,0,$lastar1); // will add value at start
 array_splice($lastar,count($lastar),0,$lastar1); // will add value at end 
print_r($lastar);
 ?>