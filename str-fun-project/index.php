<?php
echo '<b>Text Formatter Tool</b> <br><br>';
$str='   PHP   is   a popular     server-side scripting   language.   It is especially suited  to web development! php is fast, flexible,   and pragmatic. With PHP, you can create dynamic websites.   

Did you know? php originally stood for "Personal Home Page". Today, it stands for "PHP: Hypertext Preprocessor".

   PHP   powers    WordPress,    Facebook, and    many   other major websites.
';
echo '<strong>original string</strong> '.'<br>';
echo $str.'<br>';
$tr=trim($str);
echo '<strong>trim string</strong>'.'<br>';
echo $tr.'<br>'; 
echo '<strong>remove extra spaces</strong>'.'<br>';
$rem = preg_replace('/\s+/', ' ', $tr);
echo $rem.'<br>';
echo '<strong>all lower case</strong>'.'<br>';
$low=strtolower($rem);
echo $low .'<br>';
echo '<strong>capitilize string</strong>'.'<br>';
$cap=ucwords($low);
echo $cap.'<br>';
echo '<strong>total characters</strong>'.'<br>';
$strl=strlen($cap);
echo $strl.'<br>';
echo '<strong>total words</strong>'.'<br>';
$word=str_word_count($cap);
echo $word.'<br>';
echo '<strong>hilighting</strong>'.'<br>';
$high=str_ireplace('php','<mark>PHP</mark>',$cap);
echo $high.'<br>';

echo '<strong>wrap string</strong>'.'<br>';

$remn = str_replace(["\r", "\n"], '',$high); // remove all newlines
echo $remn.'<br>';
echo '<strong>split string</strong>'.'<br>';
$spl=explode('.',$remn);
print_r($spl);
echo "<br>";
echo '<strong>final string after formating</strong>'.'<br>';
foreach ($spl as $a) {
    $sentence = ucfirst(trim($a));
    if ($sentence != '') {
        // Optional: wrap each sentence if it's too long
        echo wordwrap($sentence . '.', 150, '<br>') . '<br>';
    }
}

?>