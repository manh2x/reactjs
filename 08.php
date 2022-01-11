<?php 
$i=1;
do{
    echo $i."--";
    $i++;
}
while($i<=10);
echo"<br/>";
$j=-1;
while($j<=10){
    echo $j."-";
    $j++;
    
}echo "<br/>";
$sinhvien = array(
    'SV001' => 'Nguyễn Văn A',
    'SV002' => 'Nguyễn Văn B',
    'SV003' => 'Nguyễn Văn C',
    'SV004' => 'Nguyễn Văn D',
    'SV005' => 'Nguyễn Văn E'
);
  
// Xuất ra danh sách sinh viên
foreach ($sinhvien as $tensv){
    echo $tensv . '<br/>';
}
?>