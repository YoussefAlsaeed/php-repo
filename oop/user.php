<?php
require_once("./connection.php");

class user extends connection 
{
    function selectAll()
    {
        parent::connect();
        $con = parent::getCon();

        $q = mysqli_query($con, "SELECT * FROM user");

        $data = array();

        while($row = mysqli_fetch_assoc($q))
        {
            $data[] = $row;
        }

        parent::disconnect();

        return $data;

        // $num_of_rows = mysqli_affected_rows($con);

        // for($i = 0; $i < $num_of_rows; $i++)
        // {
        //     $row = mysqli_fetch_assoc($q);
        //     $arr[$i][0] = $row["id"];
        //     $arr[$i][1] = $row["username"];
        //     $arr[$i][2] = $row["password"];

        // }
        // parent::disconnect();
        // return $arr;
    }
}
?>