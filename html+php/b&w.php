<html>
<style>
.table{
    border: 1px solid black;
    width: 270px;
}
.cell{
    width: 30px;
    height: 30px; 
}

</style>
</html>
<?php

echo "<table class='table'>";

for($i = 0; $i < 8;$i++)
{
    echo "<tr>";

    for($j = 0; $j < 8;$j++)
    {
        if(($i + $j) % 2 == 0)
            $color = "black";
        else
            $color = "white";

        echo "<td class=cell style='background-color: $color;'> </td>";
    }

    echo "</tr>";
}
echo "</table>";

?>