<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tìm màu</title>
</head>

<body>
    <form method="post" action="#" name="main">
       Nhập màu: <input type="text" name="sdt"><br/><br/>
        giải màu: <input type="text" name="text"><br/><br/>
        <button type="submit">tìm màu</button><br/><br/>
        <input type="submit" value="submit-from">
        
        
    </form>
    <?php
        $a=$_POST["sdt"];
        $b=$_POST["text"];
        if ($a == 'màu xanh'){
            echo $_POST["text"]="màu xanh";
        }
        else if ($a == 'màu đỏ')
        {
            echo $_POST["text"]="Đây là màu đỏ";
        }
        else if ($a == 'màu vàng'){
            echo $_POST["text"]='Đây là màu vàng';
        }
        else{
            echo $_POST["text"]='Các màu khác';
        }
        ?>
</body>

</html>