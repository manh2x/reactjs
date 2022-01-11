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
$tien="";
if(isset($_POST["txttien"])){
    $tien=(float)$_POST["txttien"];
}
    ?>
    <div>
        
    <h1>Mô phỏng máy rút tiền ATM </h1>
    <h3>Nhập số tiền muốn rút:</h3>
    <form method="post" action="">
<input style="width:350px; height:30px;" type="text" name="txttien" value="<?php echo $tien; ?>">

<button style="width:100px; height:30px;" type="submit">Rút Tiền</button>

    </form>
    </div>
    <div>
        <table  border="1"; width=500px; height=200px;>
            <tr align="center">
                <td>Mệnh giá</td>
                <td>Số lượng </td>
                <td>Thành tiền</td>
            </tr>
            <tr align="center">
                <td>500.000</td>
                <td>6</td>
                <td>3.000.000</td>
            </tr>
            <tr align="center">
                <td>200.000</td>
                <td>2</td>
                <td>400.000</td>
            </tr>
            <tr align="center">
                <td>100.000</td>
                <td>1</td>
                <td>100.000</td>
            </tr>
        </table>
    </div>
</body>
</html>