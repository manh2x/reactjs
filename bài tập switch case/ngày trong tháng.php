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
    $year="";
$a="";
$month="";
if(isset($_POST['month'])){
    $month=$_POST['month'];
    $a=$_POST['kq'];
    $year=$_POST['year'];
    switch($month){
        case 2: if($year%4==0 and $year%100!=0){
            $a=$year." là năm nhuận".$month." có 28 ngày";
        }
        else{
            $a=$year." là không  nhuận tháng ".$month." có 29 ngày";
        }
        break;
        case 1: 
        case 3: 
        case 5: 
        case 7: 
        case 8: 
        case 10: 
        case 12: $a=$month." có 31 ngày"; break;
        case 4: 
            case 6: 
            case 9: 
            case 11: 
            
             $a=$month." có 30 ngày"; break;
             default: $a="tháng khác"; break;
    }
}
    ?>
    <form action="" method="post"> 

    <h2> kiểm tra ngày trong tháng</h2>

    Nhập Năm: <input type="text" name="year" value="<?php echo $year ?>"><br/><br/>
     Nhập Tháng: <input type="text" name="month" value="<?php echo $month ?>"><br/><br/>
     Kết Quả   : <input style="width:300px ; height:30px; font-size:15px; font-weight:bold" type="text" name="kq" value="<?php  echo $a ?>"><br><br/>
     <input type="submit" value="xem ngày">
    </form>
</body>
</html>