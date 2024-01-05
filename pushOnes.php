<?php

$arr = array(1,2,3,1,4,6,10,7);

sort($arr);

$i = 0;
while($i < count($arr))
{
    if($arr[$i] == 1)
    {
        array_shift($arr);
        array_push($arr,1);
    }

    $i++;
}

foreach($arr as  $j)
{
    echo $j . " ";
}


?>