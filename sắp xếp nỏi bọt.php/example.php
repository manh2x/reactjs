<?php 

$mang = array(8,7,1,6,99,3,2,4,0,9,12); // mảng theo đề bài
  
function msawp_sep($mang){
  
// Sắp xếp mảng
for ($i = 0; $i < count($mang); $i++)
{
    for ($j = $i + 1; $j < count($mang); $j++) // lặp các phần tử phía sau
    {
        if ($mang[$i] < $mang[$j]) // nếu phần tử $i bé hơn phần tử phía sau
        {
            // hoán vị
            $tmp = $mang[$j];
            $mang[$j] = $mang[$i];
            $mang[$i] = $tmp;
        }
    } 
     echo $mang[$i] . ' ';

}
 
// Hiển thị các phần tử của mảng đã sắp xếp
}
echo msawp_sep($mang);

?>