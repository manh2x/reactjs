<?php
// $a=18;
// $b=tinh($a);
// function tinh($c){
//    if($c%2==0){
//        echo $c." Số chẵn";
//    }
   
// }
// echo $b;
// $a=20;
// function gtri(&$a){
//     $a=$a+1;
//     return $a;

// }
// echo gtri($a)."<br/>";
// echo $a;
// function A()
// {
//     B();
// }
  
// function B()
// {
//     C();
// }
  
// function C()
// {
//     echo 'C';
// }
  
// // Chương trình chính gọi đến hàm A
// echo A(); // Kết quả xuất ra màn hình là 'C'
$mang=array(5,6,8,2);
function tim_min($mang)
{
    // Đếm tổng số phần tử
    $total = count($mang);
  
    // Gọi min là lính cầm canh
    // lúc đầu chọn vị trí số 0 ngồi canh
    $min = 0;
  
    // Duyệt lần lượt các phần tử
    for ($i = 0; $i < $total; $i++ )
    {
        // Nếu phần tử cầm canh lớn hơn phần tử thứ $i thì
        // lấy vị trí $i ngồi canh
        if ($mang[$min] > $mang[$i]){
            $min = $i;
        }
    }
  
    // Trả về vị trí nhỏ nhất
    return $mang[$min];
}
echo tim_min($mang);
?>