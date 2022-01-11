<?php
$students = array(
    array(
        'name' => 'Nguyễn Văn Cường 1',
        'email' => 'thehalfheart1@gmail.com',
        'age' => '29'
    ),
    array(
        'name' => 'Nguyễn Văn Cường 2',
        'email' => 'thehalfheart2@gmail.com',
        'age' => '29'
    ),
    array(
        'name' => 'Nguyễn Văn Cường 3',
        'email' => 'thehalfheart3@gmail.com',
        'age' => '29'
    ),
    array(
        'name' => 'Nguyễn Văn Cường 4',
        'email' => 'thehalfheart4@gmail.com',
        'age' => '29'
    ),
    array(
        'name' => 'Nguyễn Văn Cường 5',
        'email' => 'thehalfheart5@gmail.com',
        'age' => '29'
    ),
    array(
        'name' => 'Nguyễn Văn Cường 6',
        'email' => 'thehalfheart6@gmail.com',
        'age' => '29'
    )
);
?>
 
<table border="1" cellspacing="0" cellpadding="10">
    <?php for ($i = 0; $i < count($students); $i++){ ?>
        
    <tr>
        
        <td><?php echo $students[$i]['name']; ?></td>
        <td><?php echo $students[$i]['email']; ?></td>
        <td><?php echo $students[$i]['age']; ?></td>
    </tr>
    <?php } ?>
</table>