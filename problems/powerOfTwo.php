<?php

$x = 16;

if(($x & ($x - 1)) == 0)  //using bitwise operators
{
    echo $x . " is a power of two";
}
else
{
    echo $x . " is NOT a power of two";

}

?>
