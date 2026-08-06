<?php

session_start();

if(isset($_POST['loginBtn']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "yashmahajancd" && $password == 123)
    {
        $_SESSION['username'] = $username;
        header("location:session-view.php");
    }
    else
    {
        echo "Wrong Username & Password!";
    }
}

?>