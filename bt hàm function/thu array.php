<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $ressult="";
if(isset($_POST['tim'])){
    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$_POST['c'];
$mang=array($a,$b,$c);
$b=$_POST['value'];
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
$ressult=tim_min($mang);

}

    ?>
    <form method="post" action="">
        mảng: <input type="text" name="a"><input type="text" name="b"><input type="text" name="c"><br/><br/>
        giá trị lớn nhất: <input type="text" name="value" value="<?php echo $ressult; ?>"><br/><br/>
<input type="submit" name="tim" value="Tìm">
    </form>
</body>
</html>