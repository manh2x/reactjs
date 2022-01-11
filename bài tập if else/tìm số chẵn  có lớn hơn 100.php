<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>số chẵn %2==0</title>
</head>
<body>
<?php
    $b="";
    $a="";
    if(isset($_POST["txtnhap"])){
    $a=$_POST["txtnhap"];
    if($a%2==0){
        if($a>100){
            $b="số ".$a." là số chắn lớn 100";
        }
        else if($a<100){
            $b="số ".$a." là số chắn nhỏ 100";
        }
    }
    else{
        if($a>100){
            $b="số ".$a." là số lẻ lớn 100";
        }
        else if($a<100){
            $b="số ".$a." là số lẻ nhỏ 100";
        }
    }
    }
    ?>
    <form method="post" action="#" name="main-form">
        Nhập Giá trị : <input type="text" name="txtnhap" value="<?php echo $a?>"><br/><br/>
        Kết quả Gtrị :<input type="text" name="txtkq" value="<?php echo $b?>"><br/><br/>
        <button type="submit">Kiểm tra</button>
    </form>
   
</body>
</html>