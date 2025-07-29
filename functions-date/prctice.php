<?php
//practice
echo date('l') ."  ";
echo date('d') ."  ";
echo date('W') ."  ";
echo date('d-m-Y') ."  ";
$dat=date('d')+10;
echo $dat ."  ";
echo date('N');
echo "<br>";
date_default_timezone_set('Asia/Karachi');
$time=strtotime('third Friday of November 2025') ;
echo date('d-m-Y h-i-s',$time)."  ";
echo date('l',$time)."  ";
echo date('d-m-Y H-i-s',mktime(14,30,00,12,15,2025))."  ";
echo checkdate(2, 29, 2025)."  ";//0
$date1=date_create('2025-01-01');
$date2=date_create('2025-07-01');
$diff= date_diff($date1,$date2);
echo $diff->days."  ";
$daten=date_create('29-7-2025');
date_add($daten,date_interval_create_from_date_string('10 days'));
echo date_format($daten,'d-m-Y')."  ";
date_sub($daten,date_interval_create_from_date_string('30 days'));
echo date_format($daten,'d-m-Y');
echo "<br>";
$get=getdate();
echo $get['month']."-".$get['year']."-".$get['wday']."  ";
$gets=gettimeofday();
echo $gets['usec']."  ";
print_r(localtime(time()));
echo "<br>";
print_r(date_parse('2025-12-31 23:59:59'));
echo "<br>";
print_r(date_parse_from_format('d.n.Y','31.12.2025'));
echo "<br>";
$set=date_create('2025-7-29');
date_time_set($set,18,45);
echo date_format($set,'d-m-Y H:i:s');

?>