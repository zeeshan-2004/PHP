<?php
echo "<b>Student Rank System</b> <br>";
echo "student list <br>";
$arr=[
    ['name'=>'zeeshan','marks'=>'80'],
    ['name'=>'ali','marks'=>'70'],
    ['name'=>'junaid','marks'=>'90'],
    ['name'=>'ali shahid','marks'=>'100'],
    ['name'=>'sunhan','marks'=>'60'],
    ['name'=>'asjad','marks'=>'75'],

];
echo "sort highest students <br>";
$res=array_column($arr,'marks');
print_r($res);
echo "<br>";
array_multisort($arr,SORT_DESC,SORT_NUMERIC,$res,SORT_DESC);
print_r($arr);
echo "<br>";
echo "assign ranks <br>";
 $x=1;
foreach($arr as $a=>$b){
  $arr[$a]['rank']=$x;
  $x++;
}
print_r($arr);
echo "<br>";
echo "get top 3 <br>";
$res1=array_slice($arr,0,3);
echo "<pre>";
print_r($res1);
echo "</pre> <br>";
echo "calculate average <br>";
$res2=array_column($res1,'marks');
print_r($res2);
echo "<br>";
$sum=array_sum($res2);
print_r($sum);
echo "<br>";
$avg=$sum/count($res2);
print_r($avg);
echo "<br>";
$res3=max($res2);
print_r($res3);
echo "<br>";
$res4=min($res2);
print_r($res4);
echo "<br>";
echo "filter toper <br>";
$topStudents = array_filter($arr, function($arr) use ($res3) {
    return $arr['marks'] === $res3;
});
echo "topper is ".' ';
print_r($topStudents);

?>