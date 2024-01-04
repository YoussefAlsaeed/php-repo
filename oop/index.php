<?php

require_once("./user.php");

$user = new user();
$data = $user->selectAll();

foreach($data as $row) {
    foreach($row as $key => $value) {
        echo $key . ': ' . $value . '<br>';
    }
    echo '<hr>'; 
}

// for($i = 0; $i < sizeof($data);$i++)
// {
//     echo $data[$i][0]. '<br>';
//     echo $data[$i][1]. '<br>';
//     echo $data[$i][2]. '<br>';
//     echo '<hr>';
// }

?>