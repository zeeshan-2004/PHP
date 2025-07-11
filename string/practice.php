<?php
// sterlen
//1.Check if the string has exactly 8 characters.
$a="zeeshan1";
if(strlen($a)>=8){
    echo "true";
    echo "<br>";
}
else{
    echo "false";
    echo "<br>";
}
//2. Count characters excluding spaces.
echo strlen(str_replace(" ","",$a));
 echo "<br>";

//substr
//1.Extract domain from email.
$email="fareedzeeshan858@gmail.com";
echo substr($email,strpos($email,"@")+1);
 echo "<br>";
 //2.Show only first and last character, rest as stars.
 echo substr($a,0,1).str_repeat("*",strlen($a)-2).substr($a,-1,1);
  echo "<br>";

 //strops()
 // Check if "admin" exists in string.
 $b="hello admin";
  if(strpos($b,"admin")){
    echo "true";
 }
 else{
    echo "false";
 }
  echo "<br>";
 //Check if email has @ and . after @.
 if(strpos($email,"@")){
   if(strpos($email,".")){
    echo "true";
   }
 }
 else{
    echo "fasle";
 }
   echo "<br>";

 //str_replace()

 // Replace spaces with underscores.
 $c="   heloo";
 echo str_replace(" ","_",$c);
    echo "<br>";
    //remove the word "bad".
    $d="bad boys";
    echo str_replace("bad","***",$d);
      echo "<br>";

    //  strtolower() / strtoupper()
   // Convert to uppercase if not already.
   if($d!=strtoupper($d)){
    echo strtoupper($d);
   }
  else{
    echo "invaslid";
  }
         echo "<br>";
        // Normalize input to lowercase.
      $f="UPPERCASE";
      echo strtolower($f);
            echo "<br>";

      //trim()
   // Trim and check if string is empty.
   $g="  ";
   if($g!=trim($g)) {
    if(trim($g)=="")
        echo "empty";
   }
   else{
    echo "not empty";
   }
         echo "<br>";
       //   Clean name with extra spaces.
       $h="  zeeshan fareed   ";
       echo trim($h);
        echo "<br>";

       // explode() / implode()
        //Convert CSV to array and print first element.
        $f="hi,hello , world";
        $e=explode(",",$f);
        echo ($e[0]);
       // Join array into string with pipe separator.
             echo "<br>";
       $i=array("hi","this","is","array");
       $j=implode(" ",$i);
       echo $j;

             echo "<br>";

       //strrev()
       // Check if string is palindrome.
       $k="madam";
       if($k==strrev($k)){
        echo "yes";
       }
       else{
        echo "no";
       }
        echo "<br>";
       //: Reverse and show only letters.
      $text = "123abcDEF";
echo preg_replace("/[^a-zA-Z]/", "", strrev($text));

?>