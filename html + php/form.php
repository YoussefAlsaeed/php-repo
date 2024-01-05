<html>
<body>

<form name="form1" method="post" action="form.php">

    <ul>
        <li>
            <label> Name : </label>
            <input type="text" name ="name"> 
        </li>

    <br>
        <li>
            <label> Age : </label>
            <?php
            echo "<select name=age >";

            for($i = 18 ; $i <= 100 ; $i++)
                echo "<option value = {$i}> $i </option>";

            echo "</select>";
            ?>
        </li>
    <br>
        <li>
            <label> Gender : </label>
            Male<input type="radio" name="gender" value="male">
            Female<input type="radio" name="gender" value="female">
        </li>


    <br>
        <li>
        <textarea name="about" rows="2" cols="26" placeholder="Write about yourself..." style="border-radius: 10px;"></textarea>
        </li>

    <br>
        <li>
        <label> Image : </label>
        <input type="file" name="img">
        </li>

        <br>
        <li>
        <input type="submit" name="btn" value="go">
        </li>

    </ul>


</form>

</body>
</html>


<?php

if(isset($_POST["btn"]))
{
    $name = $_POST["name"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $about = $_POST["about"];
    $file = $_POST["img"];

    if(empty($name) || empty($age) || empty($gender) || empty($about) || empty($file))
    {
        echo "Please fill all the values !";
    }
    else
    {
        print($name);
        echo "<br>";
        print($age);
        echo "<br>";
        print($gender);
        echo "<br>";
        print($about);
        echo "<br>";
        print($file);
    }


}

?>