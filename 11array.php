<?php
$student=array();
$student['SV01']=array("name"=>'mạnh',"giới tính"=>"1","tuổi"=>array(20,21,22));
$student['SV02']=array("name"=>'anh',"giới tính"=>"0","tuổi"=>array(22,23,24));
$student['SV03']=array("name"=>'nam',"giới tính"=>"1","tuổi"=>array(25,26,27));
// echo "<pre>";
// print_r($student['SV02']);

// echo "</pre>";
// echo "tên sinh viên: ".$student['SV02']['name']."<br/>";
// echo "tuổi: ".$student['SV02']['tuổi'][2]."<br/>";
// $student['SV03']["tuổi"][1]=[10];
// echo "<pre>";
// print_r($student['SV03']);

// echo "</pre>";
if(!empty($student)){
foreach ($student as $key => $value){
    $name= $value["name"];
    $GT=($value["giới tính"]==1)?"nam":"nữ";
    $tuoi=$value["tuổi"][2];
    echo "tên: ".$name." Giới tính:  ".$GT." Tuổi  :".$tuoi."<br/>";
}
}