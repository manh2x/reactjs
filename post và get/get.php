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

$sinhvie=array(["id"=>"01","name"=>"mạnh","district"=>"nho-quan","city"=>"ninh-bình","country"=>"Việt-nam"],
["id"=>"02","name"=>"quý","district"=>"gia-viễn","city"=>"ninh-bình","country"=>"Việt-nam"],
["id"=>"03","name"=>"nam","district"=>"yên_khánh","city"=>"ninh-bình","country"=>"Việt-nam"]
);


    ?>
    
        <table border="1" cellpadding="15">
            <tr>
                <td>id</td>
                <td>name</td>
                <td>district</td>
                <td>city</td>
                <td>country</td>
                <td>control</td>
            </tr>
            <?php 
foreach($sinhvie as $value){
            ?>
            <tr>
                <td> <?php echo ucfirst($value['id']);?></td>
                <td><?php echo ucfirst($value['name']);?></td>
                <td><?php echo ucfirst($value['district']);?></td>
                <td><?php echo ucfirst($value['city']);?></td>
                <td><?php echo ucfirst($value['country']);?></td>
                <td><?php echo "<a href=action.php?id=$value[id]&name=$value[name]&district=$value[district]&city=$value[city]&country=$value[country]><input type=submit name=red value= read title=view_read></a>";
                ?></td>
            </tr>
            <?php }  ?>
        </table>
   
</body>
</html>