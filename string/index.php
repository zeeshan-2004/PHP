<?php

echo "string functions";
echo "<br>";
$name="zeeshan fareed";
echo "length of string is" . strlen($name); //connect strings with . dot
echo "<br>";
echo str_word_count($name); // count words 
echo "<br>";
echo strrev($name); // revrse string
echo "<br>";
echo strpos($name,"f"); //check positions
 echo "<br>"; 
echo strpos($name,"z");
echo "<br>";
echo strpos("hello word","word");
echo "<br>";
echo str_replace("fareed","designer",$name); //replace string 
echo "<br>";
echo str_repeat("hello",10);  //repeat string for specific times
echo "<br>";
echo trim("<pre>     hello   </pre>"); //add spaces in both sides
echo"<pre>";            // view in page source
echo rtrim("     hello   "); //remove from right side
echo "<br>";
echo ltrim("     hello   ");//remove from left side
echo"</pre>";
echo"<pre>";
echo trim("     hello   ");  // remove from both sides for both strings
echo trim("     hello   ");
echo"</pre>";
echo strtolower("HELLO"); // lowercase
echo "<br>";
echo strtoupper("$name"); //uppercase
echo "<br>";
echo substr($name,0,7);  // get string in from specific index
echo "<br>";
echo substr($name,7);
echo "<br>";
echo substr($name,-6,6);
echo "<br>";
echo substr($name,7,6);
?>