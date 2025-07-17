<?php
//Create an indexed array to store 5 grocery items. Display the total number of items and print each item with a serial number.
$arr=['biscuit','lays','chocalte','sandwitch','ice cream'];
for ($i=0; $i <count($arr) ; $i++) { 
    echo ($i+1)." ".$arr[$i];
    echo "<br>";
   
}
 echo  "total number of items ".count($arr)."<br>";
 // Create an associative array to store the names of 4 subjects as keys and the marks as values. Display each subject with its corresponding mark. Also, print the total number of subjects.
 $arr1=["phy"=>80,"math"=>90,"chem"=>70,"com"=>60];
foreach($arr1 as $a=>$b){
    echo "value of $a :$b <br>";
}
// Create a multidimensional array where each sub-array contains a day name and 3 tasks for that day. Display the schedule in a readable format showing tasks planned for each day.
$arr2=[
    ['mon','jim','code','study'],
    ['tue','repair','drive','swiming'],
    ['wed','clean','shopping','party']
];
foreach($arr2 as $x){
    foreach($x as $b){
        echo $b." ";

    }
    echo "<br>";
};
 echo "<br>";
 // Create an associative array for 4 products with their prices. Display each product name and its price. Also, display the number of products in the list.
 $arr3=['biscuit'=>90,'lays'=>500,'chocalate'=>700,'ice cream'=>900];
   foreach($arr3 as $a=>$b){
        echo "price of $a is $b"."<br>";
    }
    //Create a multidimensional associative array where each student has a name and an age. Display all student names along with their ages. Also, print the total number of students.
    $arr4=[
       "first"=> ["ali",20],
        "second"=>["hassan",21],
        "third"=>["zeeshan",23]
    ];
    foreach($arr4 as $a=>$b){
        foreach($b as $c){
            echo $c." ";
        }
         echo "<br>";
    }
?>