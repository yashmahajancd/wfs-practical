<?php 

$name = $_POST['txtname'];
$address = $_POST['txtadd'];
$city = $_POST['selcity'];
$gender = $_POST['gender'];

$hobbies = "";

if(isset($_POST['reading']))
{
    $hobbies = $_POST['reading'];
}
if(isset($_POST['playing']))
{
    $hobbies = $_POST['playing'];
}
if(isset($_POST['dancing']))
{
    $hobbies = $_POST['dancing'];
}

$dob = $_POST['date'];
$contact = $_POST['contact'];
$email = $_POST['email'];



?>