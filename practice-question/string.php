<?php 
$str='082307';
$splt=substr(chunk_split($str,2,':'),0,-1);
echo $splt.'  ' . "<br>";
$str1='the quick brown fox jumps over the lazy dog';
if(strpos($str1,'jumps')!=false){
    echo "word is present".'  ' . "<br>";
}
else{
    echo "word is not present".'  ' . "<br>";
}
$str2='1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
$strsh=str_shuffle($str2);
$strf=substr($strsh,0,7);
echo $strf.'  ' . "<br>";
$str3=preg_replace('/the/','That',$str1);
echo $str3.'  ' . "<br>";
$str4="https://www.w3resource.com/index.php";
$str5=basename($str4,'.php');
echo $str5 . "<br>";
echo "<br>" . "<br>";
$char='z';
$char_next=++$char;
if(strlen($char_next)>1){
    $char_next=$char_next[0];
}
echo $char_next.'  ' . "<br>";
$strn='rayy@example.com';
$strn1=strpos($strn,'@');
$strn2=substr($strn,$strn1);
echo $strn2 . "<br>";
$strn3='The brown fox';
$strrep=substr_replace($strn3,'quick ',4,0);
echo $strrep.'  ' . "<br>";
echo stristr($strn3,' ',true) . "<br>";
?>
