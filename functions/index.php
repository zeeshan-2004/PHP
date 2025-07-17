<?php
/*$fir=5;
$sec="5 fin";
$lat=$fir+$sec;
echo $lat; */
 echo "<br>";
echo "functions";
 echo "<br>";
 function marks($m){
    $sum=0;
    foreach($m as $x){
    $sum+=$x;
    }
    return $sum;
 }
 function avg($n){
    $avg=0;
    $sum=0;
    foreach($n as $y){
    $sum+=$y;
    $avg++;
    }
    return $sum/$avg;
 }

 $umar=[100,50,50,100];
 $ahsan=[100,80,20,50];
 $result=marks($umar);
 $res=avg($umar);
 $final=marks($ahsan);
 $fin=avg($ahsan);
 echo "marks for umar are  $result and average is $res <br>" ;
 echo "marks for ahsan are  $final and average is $fin <br>" ;
  echo "<br>";
   //call by value
 function val($a){
$a="hy";
echo $a;
 echo "<br>";
 }
 $val="hello";
val($val);
echo $val; //heloo
 echo "<br>";
 //call by refrence 
  function ref(&$a){  //store address 
$a="hy";
echo $a;
 echo "<br>";
 }
 $ref="hello";
 ref($ref);
 echo $ref; //hy
 echo "<br>";
 //vavriable function 
 function vari(){
   echo "hello";
 }
 $x="vari";
 $x();
   echo "<br>";
 function var1($a){
 echo $a;
 }
 $y="var1";
 $y("this is func var");
  echo "<br>";
$var2=function($a){
   echo $a;
};
$var2("this is var function method");
 echo "<br>";
//recursive function
function rec($num){
   if($num <5){
      echo $num;
        rec($num+1);
   }
 
}
rec(1);
  echo "<br>";
 //date functions
 echo "date functions <br>";
 echo date("dS D l j F");
 echo "<br>";
 $da=date("l,F j,Y");
echo "today is $da";

// today is Sunday,July 13,2025
echo "<br>";
//day,year,month
echo date("Y-n-j");
//2025-7-13
echo "<br>";
echo date("j-m-Y");
// 13-07-2025
echo "<br>";
echo date("l,F ");
//Sunday,July
echo "<br>";
echo date("j-M-y");
echo "<br>";
// 13-Jul-25

//time
echo date_default_timezone_set("Asia/Karachi");
echo "<br>";
echo date("h:i:s A");
//03:42:18 PM
echo "<br>";
echo date("H:i:s");
//15:42:18
echo "<br>";
echo date(" A");
// PM
?>    