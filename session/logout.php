<?php

session_start();

if(isset($_POST['logoutBtn']))
{
    session_destroy();
    header("location:session-login.php");
}

?>