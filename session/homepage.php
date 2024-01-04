<?php

session_start();


if(!isset($_SESSION["username"]))
{
    header("Location: login.html");
}
else
{
    $usr = $_SESSION["username"];
}

echo " <h1> $usr </h1>";


if(isset($_POST["btn"]))
{
    session_unset();
    session_destroy();
    header("Location: login.html");
}

?>

<form method="post" action="homepage.php">
    <input type="submit" name="btn" value="LOGOUT">
</form>

