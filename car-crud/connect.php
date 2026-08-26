<?php

$con = mysqli_connect("localhost", "root", "", "car_db", 3307);

if(!$con)
{
    die("Database Connection Failed: " . mysqli_connect_error());
}

?>