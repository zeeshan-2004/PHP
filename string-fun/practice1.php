<?php
$str="It's a test";
echo addslashes($str).'<br>';
$sl=["She said \\\"Wow\\\"!", "C:\\\\Program Files\\\\App"];
$str1=implode(" ",$sl);
echo stripslashes($str1).'<br>';

$str2="My @string #has$ weird& characters!";
echo addcslashes($str2,'@!$&%#').'<br>';
$str3=["Line\\n1", "Tab\\tseparated", "Path\\C:\\\\folder"];
$str4=implode('',$str3);
if($str4!=stripcslashes($str4)){
echo stripcslashes($str4).'<br>';
}

$strn='Bonjour & bienvenue à l "Étoile"';
$strn1=htmlentities($strn);
echo htmlentities($strn1,ENT_QUOTES, 'UTF-8').'<br>';
$strn2=' Hello &amp; Welcome to the &lt;world&gt;';
$strn3= html_entity_decode($strn2);
echo $strn3.'<br>';
echo htmlspecialchars($strn3).'<br>';
$strn4='<b>Hello!</b>';
echo htmlspecialchars($strn4).'<br>';
$strn5='He said: "Dont worry"';
echo htmlspecialchars($strn5,ENT_QUOTES,'UTF-8').'<br>';
$lat='You &lt;strong&gt;rock!&lt;/strong&gt;';
echo htmlspecialchars_decode($lat).'<br>';
$lat1='&quot;Quote&quot; &amp; &#039;Single Quote&#039;';
echo htmlspecialchars_decode($lat1).'<br>';
$lat2="Hello, PHP!";
echo  bin2hex($lat2).'<br>';
$lat3=bin2hex($lat2);
echo hex2bin($lat3).'<br>';
$lat4=[72, 101, 108, 108, 111];
$lat5= 'PHP';
foreach(array_reverse($lat4) as $a){
    echo chr($a);
}
echo "<br>";
echo ord($lat5);
$arr=[];
for($i=0;$i<strlen($lat5);$i++){
    $arr[]=ord($lat5[$i]);
}

print_r($arr) ;
echo "<br>";
$lat6="Confidential";
echo convert_uuencode($lat6).'<br>';


// 🟦 Problem 1: Encode a single string
$original = "Hello PHP";
$encoded = convert_uuencode($original);
echo $encoded . '<br>';
echo 'Length: ' . strlen($encoded) . '<br>';

// 🟥 Problem 2: Encode multiple messages
$messages = ["PHP\nRocks!", "Top\tSecret", "Binary\x00Data"];
$encode = [];  // initialize the array

foreach ($messages as $msg) {
    $encode[] = convert_uuencode($msg);
}

print_r($encode);  // shows each uuencoded string

// Save all encoded data to a file (optional)
file_put_contents("safe_log.txt", implode("", $encode));

// 🟦 Problem 3: Decode a single encoded string
$original = "SecureData123";
$encoded = convert_uuencode($original);
$decoded = convert_uudecode($encoded);  // ✅ Fix: decode the single string, not the array
echo "Decoded: " . $decoded . '<br>';

// 🟥 BONUS: Decode all items from $encode
echo "Decoded All Messages:<br>";
foreach ($encode as $item) {
    echo convert_uudecode($item) . "<br>";
}
$fin="Login: user123 | Status: OK";
$enc=convert_uuencode($fin);
echo $enc . "<br>";
echo 'lenght'.strlen($enc) . "<br>";
$dec=convert_uudecode($enc);
echo $dec;
echo "<br>";
$strnew="The cat chased the other cat and another cat";
$word="cat";
$position=[];
$offset=0;
while(($pos=strpos($strnew,$word,$offset))!==false){
  $position[]=$pos;
  $offset=$pos+strlen($word);
}
$count=count($position);
echo "found $count times at [".implode(",",$position). "]";
echo "<br>";
$mask="zeeshan@example.com";
echo strlen($mask). "<br>";
echo substr_replace($mask,"****",1,5);
echo "<br>";
$strn1="Programming in PHP is interesting and challenging";
echo strlen($strn1);
echo str_word_count($strn1);
$exp=explode(" ",$strn1);
print_r($exp);
echo "<br>";
$max=0;
for($i=0;$i<count($exp);$i++){
   $max=$exp[0];   
   if($max>$exp[$i]) {
    $max=$exp[$i];
   }
}
echo $max."<br>";
echo wordwrap($strn1,15,"<br>");
$url = "https://www.example.com/products/index.php?id=12";
print_r(parse_url($url));
echo "<br>";
echo parse_url($url,PHP_URL_HOST);

?>
    