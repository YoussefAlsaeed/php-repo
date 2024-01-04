<?php

$usr = $_POST["name"];
$pass = $_POST["password"];


if(isset($_POST["btn"]))
{
    $conn = mysqli_connect("localhost","root","");
    mysqli_select_db( $conn ,"session"); 

    $q = mysqli_query($conn,"SELECT * FROM user where username = '$usr' and password = '$pass'");

    if(mysqli_num_rows($q) >  0)
    {
        $row = mysqli_fetch_array($q);
        session_start();
        $_SESSION["id"] = $row["id"];
        $_SESSION["username"] = $row["username"];

        header("Location: homepage.php");
    }
    else
    {
        echo "User isnt registered ";
    }

}



?>