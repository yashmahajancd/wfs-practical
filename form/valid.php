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

////////////////////////////////////

if(empty($name))
{
    echo "Name can't be empty! <br>";
}
elseif(!preg_match('/^[a-z]*[a-z]$/', $name))
{
    echo "Name must be in small letter! <br>";
}

if(empty($dob))
{
    echo "DOB can't be empty! <br>";
}
elseif(!preg_match('/^(0[1-9]|[12][0-9]|3[01])[-\/\.](0[1-9]|1[012])[-\/\.](19|20)[0-9]{2}$/', $dob))
{
    echo "Date must be in DD-MM-YYYY format! <br>";
}

if(empty($contact))
{
    echo "Mobile number can't be empty! <br>";
}
elseif(!preg_match('/^[0-9]{10}$/', $contact))
{
    echo "Mobile number must be in 10 digit! <br>";
}

if(isset($_POST['submitBtn']))
{
    echo "Name : $name" . "<br>";
    echo "Address : $address" . "<br>";
    echo "City : $city" . "<br>";
    echo "Gender : $gender" . "<br>";
    echo "Hobbies : $hobbies" . "<br>";
    echo "DOB : $dob" . "<br>";
    echo "Contact : $contact" . "<br>";
    echo "Email : $email" . "<br><br>";
    echo "Record Inserted Successfully.";
}

?>