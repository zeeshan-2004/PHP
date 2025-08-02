<?php
$d1=date_create('2013-6-6');
$d2=date_format($d1,'Y');
echo "  © ".$d2." PHP Exercises - w3resource";
$db=date_create("2004-06-26");
$dl=date_create();
$dif=date_diff($db,$dl);
echo $dif->days;
echo "<br>";
echo date('d-m-Y')."<br>";
// Define the two dates
$date1 = date_create("1981-11-04");
$date2 = date_create("2013-09-04");
// Calculate the difference
$diff = date_diff($date1, $date2);
// Display result in "X years, Y months, Z days"
echo $diff->format("%Y years, %m months,%d days");
echo "<br>";
$dat='2012-12-19';
echo date('m-d-Y',strtotime($dat)).' ';
$dt1=' 12-05-2014';
echo strtotime($dt1).' ';
echo date('Y-t-d').' ';//last day
echo date('Y-m-01').'  ';//first day
date_default_timezone_set('Asia/Karachi');
echo date('l \t\h\e jS');

 ?>