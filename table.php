<html>

<?php

echo "<table border = 2px style='height: 50% width: 50%; margin: auto;'>";

// EACH CELL IN EACH ROW INCREASES BY ROW NUMBER

for ($i = 1; $i <= 5; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 10; $j++) {
        $cnt = $i * $j;
        echo "<td> $cnt </td>";
    }
    echo "</tr>";
}

echo "</table>";


?>

<br>
<br>
<br>
<br>
<br>
<br>
<br>


<?php

// Sudoku N X N TABLE


$n = 3; 

echo "<table border='2' style='height: 50%; width: 50%; margin: auto;'>";
for ($i = 0; $i < $n; $i++) {
    echo "<tr>";

    for ($j = 0; $j < $n; $j++) {
        
        echo "<td> ";
            echo "<table border='1' style='height: 100%; width: 100%;'>";
            for ($k = 0; $k < $n; $k++) {
                echo "<tr>";
                for ($l = 0; $l < $n; $l++) {
                    echo "<td> ";
                    echo "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";

        echo "</td>";
    }

    echo "</tr>";
}
echo "</table>";
?>


</html>