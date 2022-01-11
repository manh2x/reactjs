<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
// $tr="bây giờ là ";
// $str1="H ";
// $str2="giờ";
// $a=addcslashes($tr,"a..z");
// $b=addcslashes($str2,"a..z");
// echo $a."<br/>";
// echo$b."<br/>";

// echo date($a.$str1.$b);
// $tomorrow  = mktime(0, 0, 0, date("m")  , date("d")+1, date("Y"));
// $nextyear  = mktime(0, 0, 0, date("m"),   date("d"),   date("Y")+1);
// echo date('d/m/Y', $nextyear
// ); // 02/12/2016
// $date = date_create_from_format('d-M-Y', '20-july-2021');
// echo "<pre>";
// print_r($date);//
$january = date_create('04-12-2000');
$february = date_create('05-12-2001');
$interval = date_diff($february, $january);
echo date_interval_format($interval, '%d days') . "<br />";
echo date_interval_format($interval, '%A days') . "<br />";
echo date_interval_format($interval, '%m month %d days') . "<br />";
$date = date_create();
echo date_offset_get($date)/3600 ."<br/>";
$date1="10/1/2022 9:54:11:52";
echo "<pre>";
print_r( date_parse_from_format('d/m/Y',$date1));
 
$a=date_isodate_set($date, 2022, 3);
echo date_format($a, 'd/m/Y') . "<br />";
 
date_isodate_set($date, 2022, 2, 1);
echo date_format($date, 'd/m/Y') . "<br />";
$b=date_modify($date,'-2 year');
echo date_format($b,'d/m/Y');
$sun_info = date_sun_info(strtotime("10/1/2022"), 21, 105.76);
foreach ($sun_info as $key => $val) {
    echo "$key: " . date("H:i:s", $val) . "<br />";
}

$info = getdate('10/1/2022');
echo "<pre>";
    print_r($info);
echo "</pre>";

?>