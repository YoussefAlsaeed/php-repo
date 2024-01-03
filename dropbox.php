<!-- CREATE DYNAMIC DROPBOX USING PHP -->

<html>

<body>
<?php

$arr = array("Sunday", "Monday" , "Tuesday" , "Wednesday" , "Thursday", "Friday","Saturday");

echo " <form>";
echo "<select>";

foreach($arr as $day)
{
    echo "<option value ={$day}> $day </option>";
}

echo "</select>";
echo "<br><br>";

echo "<select>";

for($i = 1950 ; $i <= 2050 ; $i++)
{
    echo "<option value ={$i} >  $i  </option>";
}

echo "</select>";



echo " </form>";

?>
</body>
</html>