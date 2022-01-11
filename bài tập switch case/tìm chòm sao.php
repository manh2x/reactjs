<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$ngay="";
$thang="";
$cung="";
if(isset($_POST["txtngay"])&&isset($_POST["txtthang"])){
    $ngay=$_POST["txtngay"];
    $thang=$_POST["txtthang"];
    switch($thang){
        case 1:
            if($ngay<=19){
                $cung=$ngay."/".$thang." thuộc cung ma kết(22/12 - 19/1)";
            }
            else if($ngay>=20){
                $cung=$ngay."/".$thang." thuộc cung Bảo bình(20/1 - 18/2)";
            }
            break;
            case 2:
                if($ngay<=18){
                    $cung=$ngay."/".$thang." thuộc cung Bảo bình(20/1 - 18/2)";
                }
                else if($ngay>=19){
                    $cung=$ngay."/".$thang." thuộc cung song ngư(19/2 - 20/3)";
                } 
                break;
                case 3:
                    if($ngay<=20){
                        $cung=$ngay."/".$thang." thuộc cung song ngư(19/2 - 20/3)";
                    }
                    else if($ngay>=21){
                        $cung=$ngay."/".$thang." thuộc cung Bạch Dương (21/3 - 19/4)";
                    } 
                    break;

                 
    }
}
    ?>
    <form method="post" action="">
Nhập ngày sinh: <input type="text" name="txtngay" value="<?php echo $ngay; ?>"><br/><br/>
Nhập tháng Sinh: <input type="text" name="txtthang" value="<?php echo $thang; ?>"><br/><br/>
bạn thuộc cung :<input style="width: 300px; height:auto; " type="text" name="txtcung" value="<?php echo $cung;?>"><br/><br/>

<button type="submit">Kiểm Tra Chòm Sao </button><br/><br/>
    </form>
    
</body>
</html>