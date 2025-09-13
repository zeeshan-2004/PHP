<?php
$marks1 = array(360,310,310,330,313,375,456,111,256);
$marks2 = array(350,340,356,330,321);
$marks3 = array(630,340,570,635,434,255,298);
$max=max(max($marks1),max($marks2),max($marks3));
print_r($max);
echo "<br>";
$min=min(min($marks1),min($marks2),min($marks3));
print_r($min);
echo " <br> ";
echo(round('1.67',1,PHP_ROUND_HALF_UP)).'  ';
echo(round('1.65',1,PHP_ROUND_HALF_DOWN)).'  ';
echo(round('-1.5',1,PHP_ROUND_HALF_EVEN)).'  ';
echo rand(1,11).'  ';
$ran=rand(10e12,10e16);//create random string each refresh
echo base_convert($ran,10,36).'  ';
$val = '4.5e3'; 
$ival = (int) $val; //type casting convert to int 
echo $ival.'  ';
$memory_size = memory_get_usage(); // Get the memory usage of the script and store it in $memory_size
$memory_unit = array('Bytes','KB','MB','GB','TB','PB'); // Define an array containing memory size units
// Display memory size into kb, mb etc.
echo 'Used Memory : '.round($memory_size/pow(1024,($x=floor(log($memory_size,1024)))),2).' '.$memory_unit[$x]."\n";
$dates = array('2015-02-01', '2015-02-02', '2015-02-03');
print_r(max($dates));
echo "  ";
print_r(min($dates));
echo "<br> ";
echo(round('78.78001',2,PHP_ROUND_HALF_UP)).'  ';
echo(round('8.131001',2)).'  ';

function rand_float($st_num = 0, $end_num = 1, $mul = 1000000)
{
    // Check if the start number is greater than the end number
    if ($st_num > $end_num) {
        return false; // Return false if start number is greater than end number
    }
    // Generate a random integer between the multiplied start and end numbers,
    // then divide it by the multiplication factor to get a random float value
    return mt_rand($st_num * $mul, $end_num * $mul) / $mul;
}

// Test the rand_float function with different arguments and print the results
echo rand_float() . "\n"; // Random float between 0 and 1
echo rand_float(0.6) . "\n"; // Random float between 0.6 and 1
echo rand_float(0.5, 0.6) . "\n"; // Random float between 0.5 and 0.6
echo rand_float(0, 20) . "\n"; // Random float between 0 and 20
echo rand_float(0, 3, 2) . "\n"; // Random float between 0 and 3  
echo rand_float(0, 2, 20) . "\n"; // Random float between 0 and 2
//captha generate
// Define a function named random_string with a default length of 5
function random_string($length = 5)
{ 
    // Define a string of characters without vowels and 'x'
    $chars = 'bcdfghjklmnpqrstvwxyz';

    // Initialize an empty string to store the result
    $result = '';

    // Iterate through the specified length to generate random characters
    for ($x = 0; $x < $length; $x++)
    {
        // Alternate between consonants and vowels while generating characters
        $result .= ($x % 2) ? $chars[mt_rand(13, 21)] : $chars[mt_rand(0, 12)];
    }

    // Return the generated random string
    return $result;
}

// Call the random_string function and echo the result
echo random_string();



?>