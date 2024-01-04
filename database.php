<?php


$conn = mysqli_connect("localhost","root","");   //Connect to database -- > arg (hostname  ,  username  , password) 

//$conn = mysqli_connect("localhost","root","","airlinedb");   // it can aslo take db name as fourth argument

mysqli_select_db( $conn ,"airlinedb"); // select db (connection string , db name)

$query = mysqli_query($conn,"Select * from user"); // perform query
$row = mysqli_fetch_array($query); // returns associative array --- ONE ROW ONLY
print($row["Name"]);

echo"<br>";



// Fetch all data and view in html table

$query2 = mysqli_query($conn,"Select * from user"); // perform query

echo "<table border = 2 width= 50%>";

while ($rows = mysqli_fetch_array($query2)) //  All ROWs
{
    echo "<tr>";
    echo "<td>" . $rows["ID"] . "</td>";    // can also use numeric indices with mysqli_fetch_array ex: -- $rows[0]
    echo "<td>" . $rows["Name"] . "</td>";
    echo "<td>" . $rows["Email"] . "</td>";
    echo "<td>" . $rows["Type"] . "</td>";

    echo "</tr>";
}
echo "</table>";


mysqli_close($conn);

?>