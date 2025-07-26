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

?>