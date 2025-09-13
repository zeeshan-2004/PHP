<?php
//str_split
$a='hello world';
$res=str_split($a);
print_r($res);
echo "<br>";
$res1=str_split($a,2);
print_r($res1);
echo "<br>";
//chunk_split
echo chunk_split($a,1,'...').'<br>';
echo chunk_split($a,5,'<br>').'<br>';
//lower and upper
$res3='Hello Pakistan';
echo lcfirst($res3).'<br>';
$res4='this string';
echo ucfirst($res4).'<br>';
echo ucwords($res4).'<br>';
//count
echo strlen($a).'<br>';
echo str_word_count($a).'<br>';
$arr1=str_word_count($a,1);
print_r($arr1);
echo "<br>";
$arr2=str_word_count($a,2);
print_r($arr2);
echo "<br>";
$b='this is world .have a nice a day in world.beautiful World';
echo substr_count($b,'world').'<br>';
echo substr_count($b,'world',12).'<br>';
echo substr_count($b,'world',1,15).'<br>';
//position
echo strpos($b,'world').'<br>';
echo strpos($b,'world',8).'<br>';
echo strrpos($b,'world').'<br>';
echo stripos($b,'world').'<br>';
echo strripos($b,'world').'<br>';
//search
echo strstr($b,'world').'<br>';//right part
echo strstr($b,'world',true).'<br>';//left part
echo stristr($b,'WORLD').'<br>';
echo strchr($b,'day').'<br>';
echo strpbrk($b,'h').'<br>';
echo strpbrk($b,'ni').'<br>';
//substr( )
echo substr($b,10).'<br>';
echo substr($b,-8).'<br>';
echo substr($b,0,5).'<br>';
echo substr($b,20,-5).'<br>';
echo substr($b,-10,-5).'<br>';
//strrev()
echo strrev($b).'<br>';
echo str_shuffle($b).'<br>';


?>