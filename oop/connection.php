<?php

class connection
{
    var $host = 'localhost';
    var $user = 'root';
    var $pass ='';
    var $db= 'session';

    var $connect;

    function connect()
    {
        $this->connect = mysqli_connect($this->host,$this->user,$this->pass) or die(mysqli_errno($this->connect));
        mysqli_select_db($this->connect,$this->db);
    }

    function disconnect()
    {
        if(isset($this->connect))
        {
            mysqli_close($this->connect) or die(mysqli_errno($this->connect));
        }
    }

    function getCon ()
    {
        return $this->connect;
    }
}

?>