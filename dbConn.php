<?php

$db = mysqli_connect("localhost","root","test12345","subscribe");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>