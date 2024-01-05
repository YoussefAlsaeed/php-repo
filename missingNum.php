<?php

/*USE PHP TO FIND MISSING NUMBER IN SORTED ARRAY*/


//Assuming no negative numbers

// $targetArr = array(1,2,3,4,5,7,8);

// $checkArr = array();

// for($i = 1; $i<= sizeof($targetArr) + 1 ; $i++)
// {
//     $checkArr[$i - 1] = $i;
// }

// for($i = 0; $i<= sizeof($checkArr); $i++)
// {
//     if($checkArr[$i] != $targetArr[$i])
//     {
//         echo "Output : " . $checkArr[$i];
//         break;
//     }
// }

//General solution
$targetArr = array(-4, -2, -1, 0, 1, 2, 3, 4);

$missingNumber = null;

for ($i = 0; $i < count($targetArr) - 1; $i++) {
    if ($targetArr[$i + 1] - $targetArr[$i] != 1) {
        $missingNumber = $targetArr[$i] + 1;
        break;
    }
}

if ($missingNumber !== null) {
    echo "Output : $missingNumber\n";
} else {
    echo "No missing number found.\n";
}

?>