<?php
//str_replace
$str='heloo world,this is nice world';
echo str_replace('world','earth',$str).'<br>';
echo str_replace('world',' ',$str).'<br>';
$str1=['world','is'];
$str2=['earth','are'];
echo str_replace($str1,$str2,$str).'<br>';//for mutilpe sub-string
$str3=['WORLD','HELOO'];
echo str_ireplace($str3,$str2,$str).'<br>';
$arr=['red','pink','purple'];//for array replace
$res=str_replace('red','blue',$arr);
print_r($res);
echo "<br>";
echo substr_replace($str,'earth',6).'<br>';
echo substr_replace($str,'earth',6,10).'<br>';
echo substr_replace($str,'earth',6,-6).'<br>';
echo strtr($str,'or','ie').'<br>';
//str_pad
$str1='hello world';
echo str_pad($str1,15,'.').'<br>';
echo str_pad($str1,15,'+=').'<br>';
echo str_pad($str1,15,'.',STR_PAD_LEFT).'<br>';
echo str_pad($str1,15,'.',STR_PAD_BOTH).'<br>';
//str_repeat
echo str_repeat($str1,5).'<br>';
$str3='+=';
echo str_repeat($str3,5).'<br>';
//trim
echo trim($str1,'h').'<br>';
echo trim($str1,'ldhe').'<br>';
echo trim($str1).'<br>';//for spaces
echo ltrim($str1,'he').'<br>';
echo rtrim($str1,'ld').'<br>';
//compare
echo strcmp('hello world','hello world').'  ';//0
echo strcmp('hello world','hello worl').'  ';//+n
echo strcmp('hello world','hello worlds').'  ';//_n
echo strncmp('hello world','hello worlds',6).'  ';
echo strcasecmp('HELLO WORLD','hello world').'  ';
echo strncasecmp('HELLO WORLD','hello worlds',12).'  ';
echo strnatcmp('2HELLO WORLD','10hello world').'  ';//for natural or mix data
echo strnatcasecmp('2HELLO WORLD','2hello WORLD').'  ';//for natural or mix data
echo substr_compare('HELLO WORLD','hello',6).'  ';
echo substr_compare('hello world','hello',0,5).'  ';
echo substr_compare('hello world','hello WORLD',-2,2,true).'  ';//+n
echo substr_compare('hello world','ld',-2,2,true).'  ';//0
echo similar_text('hello world','hello earth').'  ';//number of char matches
echo similar_text('hello world','hello earth',$per).'  ';
echo 'percentage is :'.$per.'<br>';
//slashes
$text="Hello 'world' ";
echo addslashes($text).'   ';
$newt= addslashes($text);
echo stripslashes($newt).'   ';
echo addcslashes($text,'wlH').'   ';
echo addcslashes($text,'A..Z').'   ';//for all capital letters slashes
$text1=addcslashes($text,'a..z');//for all small letters slashes
echo addcslashes($text,'a..f').'   ';//for specific letters slashes
echo stripslashes($text1).'<br>';
//htmlentities
$text2='<a href="http://localhost:8082/zeeshan">"Go to localhost"</a>';
echo $text2.'  ';
echo htmlentities($text2).'  ';
$text3=htmlentities($text2,ENT_QUOTES);
echo htmlentities($text2,ENT_NOQUOTES).'  ';
echo html_entity_decode($text3).'  ';
print_r(get_html_translation_table(HTML_SPECIALCHARS)).'<br><br>';//for table of  encoded char
// print_r(get_html_translation_table(HTML_ENTITIES));for table of  htmlentities
//md5 and sha1
echo "<br>";
echo 'md5 hex '. md5($text).'  ';
echo 'md5 binary ' .md5($text,true).'  ';
echo 'sha1 hex ' .sha1($text).'  ';
echo 'sha1 binary ' .sha1($text,true).'<br>';
if(sha1($text)=='29490869a2d17c3ed08a4e54fea1130ce9e95e00'){
    echo 'password matched';
    echo "<br>";
}
//uunencode and decode
echo convert_uuencode($text).'<br>';
    echo "<br>";
$text4=convert_uuencode($text);
echo convert_uudecode($text4).'<br>';
//hex and bin
echo bin2hex($text).'<br>';
$text5=bin2hex($text);
echo hex2bin($text5).'<br>';
//chr
$newstr=chr(65);//A
echo $newstr.'<br>';
echo chr(bindec('01100010')).'<br>';
echo chr(hexdec('5A')).'<br>'; 
//ord
echo ord('a').'<br>';//97
echo ord('@').'<br>';
$str='hello <b>world</b>,hello <i>earth</i>';
echo strip_tags($str,"<b>").'<br>';
$str1='hello world is nice';
echo wordwrap($str1,5,'<br>',true);

?>