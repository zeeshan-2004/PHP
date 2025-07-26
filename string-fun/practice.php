<?php
$filename = "report.final.version.pdf";
echo strrpos($filename,'.').'<br>';
for($i=0;$i<strlen($filename);$i++){
  $char = strtolower($filename[$i]);
    if($char=='a' ||$char=='e'|| $char=='i'||$char=='o'||$char=='u'){
     echo "$char is found at $i"; 
  break;
    }
}
echo "<br>";
$text = "PHP is great. Learning php helps build apps. PHP!";
echo stripos($text,'php').'<br>';
echo strripos($text,'e').'<br>';
$paragraph = "The theory and the theme are based on the thesis.";
$substring = "the";
$positions = [];

$offset = 0;

while (($pos = strpos($paragraph, $substring, $offset)) !== false) {
    $positions[] = $pos;
    $offset = $pos + 1; // move past the current match
}

print_r($positions);
echo "<br>";
$hex = "4F2A9B7C33";
$res=str_split($hex,2);
print_r($res);
echo "<br>";
$res1=chunk_split($hex,4,' ');
print_r($res1);
echo "<br>";
$code = "x7y9qk";
$res2=strtoupper($code);
print_r($res2);
echo "<br>";

$input = "  @@@Hello World!###  ";
echo trim($input,'@# ').'<br>';
$command = "###>>>php artisan migrate";
echo ltrim($command,'#>').'<br>';
$row = "DATA#_ROW###***";
echo rtrim($row,'*#').'<br>';
$invoice = "INV5607";
if(strlen($invoice)<12){
echo str_pad($invoice,12,"0",STR_PAD_LEFT).'<br>';

}
$pattern = "*-";
echo str_repeat($pattern,20).'<br>';

$comment = "This is a dumb idea and a stupid plan.";
$str=['dumb','stupid'];
$str1=['consored','consored'];
echo str_replace($str,$str1,$comment).'<br>';
$feedback = "yes YES YeS yEs";
echo str_ireplace('yes','✅',$feedback).'<br>';
$word = "education";
$vow=[ 'a'=>1, 'e'=>2, 'i'=>3, 'o'=>4, 'u'=>5];

function replaceVowel($char) {
    global $vow; // Use global to access outside variable
    return isset($vow[$char]) ? $vow[$char] : $char;
}

$letters = str_split($word);
$mapped = array_map('replaceVowel', $letters);
$result = implode('', $mapped);
echo $result.'<br>'; 
$phone = "9876543210";
echo substr_replace($phone,'****',3,4).'<br>';
$para = "This is a test. Let's count how many sentences. PHP is fast. Very fast.";
echo substr_count($para,'.',10,40).'<br>';
$text = "PHP7 is cool! Version 8.1 is amazing, isn't it?";
echo str_word_count($text).'<br>';
$input = "A man a plan a canal Panama";
$lat=str_replace(' ','',$input);
$lat1=strtolower($lat);
if(strrev($lat1)===$lat1){
  echo $input." is palindrom".'<br>';
}
else{
    echo $input." is not palindrom".'<br>';
}
$email = "john.doe@example.com";
$lat=strpos($email,"@");
echo substr($email,$lat+1).'<br>';
echo strstr($email,'@').'<br>';
$word = "rhythm";
echo strpbrk($word,'aeiwou').'<br>';



?>