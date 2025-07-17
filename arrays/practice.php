<?php
// index arrays
$names = ["Alice", "Bob", "Charlie", "David", "Eve"];
foreach($names as $x){
    echo "$x <br>";
}

$numbers = [10, 45, 32, 67, 28];
$a=$numbers[0];
for ($i=0; $i<count($numbers) ; $i++) { 
   if($numbers[$i]>$a){
    $a=$numbers[$i];
   }
};
echo $a;
echo "<br>";

// associative array
$student = ["name" => "Alice", "age" => 20, "course" => "Math"];
foreach($student as $b=>$c){
  echo "value of $b is $c <br>";
}

$capitals = ["India" => "New Delhi", "USA" => "Washington", "France" => "Paris"];
$input="USA";
foreach($capitals as $x=>$y){
    if($x===$input){
        echo "value of $x is $y <br>";
    }
}

// multidimensional array
// $students = [
//     ["Alice", 80, 70, 90],
//     ["Bob", 65, 75, 85]
// ];
// for ($i=0; $i < count($students); $i++) { 
//     $name=$students[$i][0];
//     $total=0;
//     for ($j=0; $j <count($students[$i]) ; $j++) { 
//         $total+=$students[$i][$j];
//     }
//     echo "$name:$total ";
//           echo "<br>";

// }

$students = [
    ["Alice", 80, 70, 90],
    ["Bob", 65, 75, 85]
];

for ($i = 0; $i < count($students); $i++) {
    $name = $students[$i][0];
    $total = 0;
    // Start from index 1 to sum only the marks
    for ($j = 1; $j < count($students[$i]); $j++) {
        $total += $students[$i][$j];
    }
    echo "Name: $name, Total Marks: $total\n";
};
echo "<br>";
/*Create a 2D array representing a small table (e.g., 3 rows of products with name and price). Print it using nested loops.
$products = [
    ["Pen", 10],
    ["Notebook", 30],
    ["Eraser", 5]
];

Pen - 10  
Notebook - 30  
Eraser - 5
*/
//associative array
$arr=[
   "A"=> [12,28,40],
   "B"=> [17,8,25],
   "C"=> [25,12,27],
    "D"=>[28,20,48]
];
    foreach($arr as $a=>$b){
        // echo $a;  check outer keys
        foreach($b as $c){
 echo $c." ";
        }
           echo "<br>";
    };
    echo "<br>";
$arr1=[
   [12,28,40],
    [17,8,25],
   [25,12,27],
  [28,20,48]
];
foreach($arr1 as $a){
    foreach($a as $b){
        echo $b." ";
    }
    echo "<br>";
}
// ?>


