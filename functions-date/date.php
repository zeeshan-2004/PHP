<?php
//day
echo 'today is :'.date('d')."  ";
echo 'today is :'.date('j')."  ";
echo 'today is :'.date('jS')."  ";
echo "<br>";
//month
echo 'month is :'.date('F')."  ";
echo 'month is :'.date('m')."  ";
echo 'month is :'.date('n')."  ";
echo 'month is :'.date('M')."  ";
echo 'month total day is :'.date('t')."  ";
echo "<br>";
//year
echo 'year is :'.date('Y')."   ";
echo 'year is :'.date('y')."   ";
echo 'leap year is :'.date('L')."   ";
echo "<br>";
//weak
echo 'weak day is :'.date('l')."  ";
echo 'weak day is :'.date('D')."  ";
echo 'weak day is :'.date('N')."  ";
echo 'weak day is :'.date('w')."  ";
echo 'year weak is:'.date('W')."  ";
echo 'year day is :'.date('z')."  ";//year no

echo "<br>";
//full date
echo 'full date :'.date('d/m/Y');
echo "<br>";
//set timezone
date_default_timezone_set('Asia/Karachi');
echo date('e');//check timezone
//time
echo date('h') ."  ";
echo date('H') ."  ";
echo date('G') ."  ";
echo date('g') ."  ";
echo date('i') ."  ";
echo date('s') ."  ";
echo date('a') ."  ";
echo date('A') ."  ";
echo date('d-m-Y H:i:s a') ."  ";
//strtotime returns time according to string
echo date('d-m-Y',strtotime('now'))."  ";
echo date('d-m-Y',strtotime('26 june 2004'))."  ";
echo date('d-m-Y h-i-s',strtotime('+1 week 5 days 1 hour 10 min'))."  "; 
echo date('d-m-Y h-i-s',strtotime('next monday'))."  "; 
echo "<br>";
//Mktime gmmktime are used to set old date and time
echo date('d-m-Y',mktime(12,10,30,6,26,2004))."  ";//26-06-2004
echo date('l',gmmktime(12,10,30,6,26,2004))."  ";//Saturday
echo "<br>";
//date_created create date and return object type 
$date=date_create('2030-6-26');//for future
echo date_format($date,'d-m-Y H-i-s')."  ";//26-06-2030
$datep=date_create('2004-06-26');//for past
echo date_format($datep,'d-m-Y');//26-06-2004
echo "<br>";
//checkdate
echo checkdate(10,18,2001)."  ";//1
echo checkdate(13,18,2001)."  ";//0
echo "<br>";
//date-diff
$date1=date_create('2004-6-26');
$date2=date_create('2024-6-26');
$diff=date_diff($date1,$date2);
echo $diff->days;//only days
// print_r($diff);complete diff
echo "<br>";
//date_add
$date=date_create('2025-6-26');
date_add($date,date_interval_create_from_date_string("30 days"));
echo date_format($date,'d-m-Y');
echo "<br>";
//date_sub
$date=date_create('2025-6-26');
date_sub($date,date_interval_create_from_date_string("30 days"));
echo date_format($date,'d-m-Y');
echo "<br>";
//date_diff works both date_sub and data_add
$date=date_create('2025-6-26');
date_modify($date,"30 days");
echo date_format($date,'d-m-Y')."  ";
$date=date_create('2025-6-26');
date_modify($date,"-30 days");
echo date_format($date,'d-m-Y')."  ";
echo "<br>";
//getdate returns array of curent date and time
print_r(getdate());//curent date and time array
echo "<br>";
$datec=getdate();
echo $datec['month'].'-'.$datec['year'];//specific term in array
echo "<br>";
$mkt=mktime(12,10,30,6,26,2004);
$mkar=(getdate($mkt));//get array of old date
echo $mkar['month'].'-'.$mkar['year']. "<br>";
print_r($mkar);
echo "<br>";
//gettimeofday( ) also retun array
//lower-level details such as seconds, microseconds, and timezone offset.
print_r(gettimeofday());
echo "<br>";
$sect=gettimeofday();
echo $sect['sec'];
echo "<br>";
//localtime( ) return array of local server time
print_r(localtime());//index array
echo "<br>";
print_r(localtime(time(),true));//assoc array
echo "<br>";
print_r(localtime($mkt,true));
echo "<br>";
//date_parse return array about specific information
print_r(date_parse('2024-6-26 12-26-25'));
$parse=date_parse('2024-6-26 12-26-25');
echo $parse['day'];
echo "<br>";
//date_parse_format return array specific format 
print_r(date_parse_from_format('d.n.y','20.4.2024'));
echo "<br>";
//date_time_set  add time in date object
 echo "<br>";
 $datec=date_create('2004-6-26');
 date_time_set($datec,12,10);
 echo date_format($datec,'d-m-Y h-i-s');
  echo "<br>";
//timezonne functions
echo date_default_timezone_get(). "  ";//get server timezon
date_default_timezone_set('Asia/Karachi');//set timezone
$tz= timezone_open('Asia/Karachi');//also set timezone
echo timezone_name_get($tz). "  ";//get timezone
print_r(timezone_location_get($tz));//get location information
echo "<br>";
// print_r(timezone_identifiers_list());for all timwxone countries
//  print_r(timezone_identifiers_list(16));//for asia
//for all list of countries in docs

?>