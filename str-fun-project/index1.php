<?php
echo '<strong>Password Strength Checker</strong> <br><br>';
$password = 'Pa$$W0rd!2025'; 
$score=0;
$len=strlen($password);
if($len<=6){
    echo 'short password <br>';
      $score++;
}
else
    if($len>6 && $len<13){
    echo 'medium password <br>';
    $score+=2;

}
else
    if($len>=13){
     echo 'strong password <br>';
      $score+=3;
    }
    else{
        echo 'invalid input <br>';
    }
$low=strtolower($password);
if($low!=$password){
    echo 'password contian upper <b>';
    $score++;
}
$upp=strtoupper($password);
if($upp!=$password){
    echo 'password contain lower  <br>';
    $score++;
}
if(strpbrk($password,'0123456789')!=false){
echo 'password contain digits <br>';
   $score++;
}


if(strpbrk($password,'!@#$%^&*()_+=-')!=false){
echo 'password contain special char <br>';
   $score++;
}

$weak = ['password', '123', 'abc'];
$isweak = false;

foreach ($weak as $pattern) {
    $off = 0;
    while (($pos = strpos(strtolower($password), $pattern, $off)) !== false) {
        echo "Password contains weak pattern '$pattern' at position $pos<br>";
        $isweak = true;
        $off = $pos + 1;
    }
}

if ($isweak) {
    echo "Password is weak<br>";
       $score++;
} else {
    echo "Password is strong enough<br>";
       $score+=2;
}

if($score<=6){
    echo 'short and no variety';
}
else
    if($score==7){
       echo 'medium and missing some variety';  
    }
else 
    if($score>7){
    echo 'stronger and have variety'; 
    }
?>