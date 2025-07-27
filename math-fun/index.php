<?php
$str=max(22,40,46,80,100);
echo $str.'<br>';
$str1=min(22,40,46,80,100);
echo $str1.'<br>';
$str2=min([2,4,6],[3,5,7]);
print_r( $str2);
echo "<br>";
$str3=max([2,4,6],[3,5,7]);
print_r( $str3);
echo "<br>";
$str4=max(true,false);
echo $str4.'<br>';
$str5=min(true,false);
echo $str5.'<br>';
echo 'ceil '.ceil(1.4).' ';
echo 'neg ceil '.ceil(-2.4).' ';
echo 'floor  '.floor(1.4).' ';
echo 'neg floor '.floor(-2.4).' ';
echo 'above .5 round  '.round(1.6).' ';
echo 'less .5 round '.round(1.4).' ';
echo '.5 round '.round(1.5).' ';
echo 'neg abs '.abs(-1).' ';
echo 'pos abs '.abs(1).' ';
echo "<br>";
echo intdiv(8,4).' ';
echo intdiv(5,2).' ';
echo 'sqaure root '.sqrt(9).' ';
echo 'sqaure root '.sqrt(256).' ';
echo 'power '.pow(2,5).' ';
echo 'power '.pow(-2,7).' ';
echo "<br>";
echo 'random '.rand().' ';
echo 'random '.rand(0,10).' ';
echo 'random '.mt_rand(10,50).' ';
echo 'lgc '.lcg_value().' ';
echo "<br>";
//practical
$s1 = 34.7;
$s2 = 33.9;
$s3 = 35.3;
echo max($s1,$s2,$s3).' ';
$g1 = [85, 88];
$g2 = [76, 91];
$g3 = [90, 83];
print_r(min($g1,$g2,$g3));
echo "<br>";
$pro = [14.2, 25.7, 33.9, 9.5];
$newp=[];
foreach($pro as $a){
  $newp[]=ceil($a);
}
print_r($newp);
echo "<br>";
$values = [19.99, 14.75, 22.5, 8.2, 99.9];
$newv=[];
foreach($values as $a){
  $newv[]=floor($a);
}
print_r($newv);
echo "<br>";
$r= [4.438, 3.823, 5.000, 2.67];
$newr=[];
foreach($r as $a){
  $newr[]=round($a);
}
print_r($newr);
echo "<br>";
$temp1 = 35;
$temp2 = 30;
if($temp1>$temp2){
    echo 'value of temp1 is greater ';
}
else
if($temp2>$temp1){
     echo 'value of temp2 is greater ';
}
else{
    echo 'both are equal';
}
echo "<br>";
$changes = [5, -7, 12, -3, -1];
$b=0;
foreach($changes as $a){
 $b+=abs($a);
}
echo $b;
echo "<br>";
$numbers = [25, 49, 121, 2];
$c=[];
foreach($numbers as $a){
    $c[]=round(sqrt($a),2);
}
print_r($c);
echo "<br>";
$P = 1000; // principal
$r = 0.05; // rate
$t = 3;    // time
  echo($P*pow((1 + $r),$t));
echo "<br>";
$rand=[];
while(count($rand)<=10){
    $rand[]=rand(10,100);
}
print_r($rand);
echo "<br>";
$mt=[];
while(count($mt)<=6){
    $mt[]=mt_rand(0,6);
}
print_r($mt);
echo "<br>";
$lcg=lcg_value();
if($lcg<.5){
    echo 'heads';
}
else{
    echo 'tails';
}
?>