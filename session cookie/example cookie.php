
<!DOCTYPE html><?php

// Nếu click vào nút Lưu Session
if (isset($_POST['save-session']))
{
    // Lưu Session
   
    $a=$_POST['username'];
setcookie("name",$a,time()+3600);
            // Hiển thị thông tin lưu trong Session
            // phải kiểm tra có tồn tại không trước khi hiển thị nó ra
            if (isset($_COOKIE['name']))
            {
                echo 'Tên Đăng Nhập Là: ' . $_COOKIE['name'];
            }
            
}
?>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <h1>
            
        </h1>
        <form method="POST" action="">
            <input type="text" name="username" value=""/> <br/>
            <input type="submit" name="save-session" value="Lưu Session"/>
        </form>
    </body>
</html>