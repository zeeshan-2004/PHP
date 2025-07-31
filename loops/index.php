<?php
// while loop
echo "while loop";
  echo "<br>";
$i=1;
while($i<=5){
    echo $i;
    echo " ";
    $i++;

}
 echo "<br>";
 $b=1;
while($b<=5){
    echo $b;
    echo " ";
    $b+=2;

}
// loops 
 echo "<br>";
 for ($i=1; $i<=5 ; $i++) { 
    echo "this is for loop $i <br>";
 }
 echo "<br>";
 //nested loop
 for($i=1;$i<=50;$i+=10){
    for ($j=$i; $j <$i+10 ; $j++) { 
   echo $j." ";
    }
     echo "<br>";
 }
  echo "<br>";
 echo "this is do while";
  echo "<br>";
 $c=90;
 do{
    echo "value of c is:$c <br>";


 }
 while($c<=5); 
  echo "<br>";

 //foreach loop
 $arr=array("red","green","blue","pink");
//  for ($i=0; $i<count($arr); $i++) { 
//     echo $arr[$i];
//      echo "<br>";
//  }
foreach($arr as $x){
    echo $x;
     echo "<br>";
}

// countinue
for ($i=1; $i <= 5; $i++) { 
    if($i==3){
        echo  "<br>";
        continue; // skip 3
    }
echo "number is :".$i . "<br>";
}
  echo "<br>";
//breakgi
for ($i=1; $i <= 10; $i++) { 
    if($i==3){
      break;// breajk at 2
         
    }
echo "number is :".$i . "<br>";
}
//goto 
echo "hello world 1";
echo "hello world 2";
goto abc;
echo "hello world 3";
echo "hello world 4";
abc:
echo " this is label abc";
echo '<br>';
//die
echo 'this is first line <br>';
echo 'this is secind line <br>';
die();
echo 'this is third line <br>';


?>