<?php 
$names=["Alice", "Bob", "Charlie", "David", "Eve"];
foreach($names as $a){
echo $a." ";
}
 echo "<br>";
 $numbers = [10, 45, 32, 67, 28];
 $max=$numbers[0];
 foreach($numbers as $a){
    if($a>$max){
        $max=$a;
    }
 }
 echo $max."<br>";
 $student = ["ali" => 300, "ahmad" => 200, "hassan" =>500];
 foreach($student as $a=>$b){
    echo "marks of $a is $b ";
 }
  echo "<br>";
  $student["hassan"]=250;
  print_r($student);
    echo "<br>";
     foreach($student as $a=>$b){
        if($a=="hassan"){
            echo "this is desired thing  ";
        }
     }
$arr=[
   "A"=> [12,28,40],
   "B"=> [17,8,25],
   "C"=> [25,12,27],
  "D"=>[28,20,48]
];
foreach($arr as $a =>$b){
    echo $a." ";
    foreach($b as $c){
        echo $c."  ";
    }
    echo "<br>";
}
$arr1=[
    ["price"=>20,"quantity"=>3],
    ["price"=>20,"quantity"=>3],
    ["price"=>20,"quantity"=>3]
];
$total=0;
foreach($arr1 as $a){
    foreach($a as $b=>$c){
        if($b=="price")
        $total=$total+$c;
    }

    }
    echo $total;
     $numbers1= [100, 145, 32, 167, 28];
   foreach($numbers1 as $a){
    $numbers[]=$a;
   }
   print_r($numbers);
   echo "<br>";
$products = [
    ["name" => "Laptop",   "price" => 800, "quantity" => 2],
    ["name" => "Phone",    "price" => 500, "quantity" => 3],
    ["name" => "Tablet",   "price" => 300, "quantity" => 4],
    ["name" => "Headset",  "price" => 100, "quantity" => 5],
];
$totalpr=0;
foreach($products as $a){
 $name=$a["name"];
 $price=$a["price"];
 $quantity=$a["quantity"];
 if(!isset($name["name"])){
$totalpr=0;
$totalpr=$price*$quantity;
 }
 echo "price of $name is $totalpr  ";
}
$arrlat=[
   [12,28,40],
    [17,8,25],
   [25,12,27],
  [28,20,48]
];
for($row=0;$row<count($arrlat);$row++){
    for($col=0;$col<count($arrlat[$row]);$col++){
        echo $arrlat[$row][$col];
        echo " ";
    }
    echo "<br>";
}
echo "<br>";

 ?>