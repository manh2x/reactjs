<?php
// $i = 0;
// $j = 10;
// while ($i < 10 && $j > 5){
//     $i++;
//     $j -= 2;
//     echo "i=".$i.";";
//     echo "j=".$j."-<br/>";
// }
$i = 1;
while ($i < 6)
{
    $j = $i;
    while ($j < 10)
    {
        echo $j."-";
        $j++;
    }
    echo '<br/>
'.$i."i<br/>";
    $i++;
}
?>