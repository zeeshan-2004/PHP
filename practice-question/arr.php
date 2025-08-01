<?php 
$color = array('white', 'green', 'red', 'blue', 'black');
$sol="The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the  $color[1] lawn, the  $color[0] house, the  $color[3] sky. The new president and his first lady. - Richard M. Nixon";
echo $sol."<br>";
sort($color);
echo "<ul>";
foreach($color as $a ){
    echo "<li>$a</li>";
}
echo "</ul>";
echo "<br>";
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris");
foreach($ceu as $a=>$b){
    echo"capital of $a is $b".', ';
}
echo "<br>";
$x = array(1, 2, 3, 4, 5);
array_splice($x,-2,1);
print_r($x);
echo "  ";
$colors = array(4 => 'white', 6 => 'green', 11=> 'red');
echo "$colors[4]";
echo "<br>";
function fun($val,$key){
  echo "$key :$val <br>";
}
$json='{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail": {
"Publisher": "Little Brown"
}}';
$arr=json_decode($json,true);
array_walk_recursive($arr,'fun');
echo "<br>";
$arr1=[1,2,3,4,5];
array_splice($arr1,3,0,'$');
print_r($arr1);
echo "<br>";
$arr2=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
asort($arr2);
print_r($arr2);
echo "<br>";
arsort($arr2);
print_r($arr2);
echo "<br>";
ksort($arr2);
print_r($arr2);
echo "<br>";
krsort($arr2);
print_r($arr2);
echo "<br>";
$str='78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73';
$arr3=explode(",",$str);
$sum=0;
$arrlen=count($arr3);
foreach($arr3 as $a){
  $sum+=$a;
}
$av=$sum/$arrlen;
echo "average is: ".$av;
echo "<br>";
sort($arr3);
$low=[];
foreach($arr3 as $b){
    if(count($low)<=7){
        $low[]=$b;
    }
}
print_r($low);
echo "<br>";
arsort($arr3);
$high=[];
foreach($arr3 as $c){
    if(count($high)<=7){
        $high[]=$c;
    }
}
print_r($high);
echo "<br>";
function mer($a,$b){
    $temp=[];
    $temp[]=$a;
    if(is_scalar($b)){
        $temp[]=$b;
    }
    else{
        foreach($b as $c=>$d){
            $temp[]=$d;
        }
    }
    return $temp;
}
$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com");
$mer=array_map('mer',$array2,$array1);
print_r($mer);
?>
