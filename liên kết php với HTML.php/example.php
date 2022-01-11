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
    if(isset($_POST['kt'])){
    $a=$_POST['ten'];
    $b=$_POST['tuoi'];
$sinhvie=array(["name"=>"mạnh","age"=>21],
["name"=>"nam","age"=>20],
["name"=>"linh","age"=>23],["name"=>$a,"age"=>$b]
);
    }
    ?>
    <form action="" method="post">
       tên: <input type="text" name="ten"><br/><br/>
        tuổi: <input type="text" name="tuoi"><br/><br/>
        <input type="submit" name="kt" value="tích"><br/><br/>
    </form>
    <table border="1" cellpadding="5">
<tr>
    <td> NAME</td>
    <td>AGE</td>
</tr>
<?php
foreach($sinhvie as $key){?>
<tr>
    <td>
<?php echo $key['name'];?> </td>
<td> <?php echo $key['age'];?></td>
</tr>
<?php } ?>
    </table>
</body>
</html>