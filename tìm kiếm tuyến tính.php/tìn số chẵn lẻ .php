<?php
// // sử dụng for để thiết lặp mảng $a có giá trị từ 1 ->100
// $a=array();
// for($i=0;$i<=100;$i++){
//     $a[$i]=$i+1;
// }
$a=array(1,5,9,18,21,22,25,65,35);
// gọi hàm để tìm chẵn lẻ
function tim_chan_le($a){
    foreach($a as $key => $valu){
        if($valu%2==0){
echo $valu." là số chẵn nằm ở vị trí ".$key."<br/>";
        }
        else{
            echo $valu." là số lẻ nằm ở vị trí ".$key."<br/>";
        }
    }
}
echo tim_chan_le($a)
?>