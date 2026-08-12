<?php

if(isset($_POST['submitBtn']))
{
    if(isset($_POST['remember']))
    {
        setcookie("username", $_POST['username'], time() + 3600);
        setcookie("password", $_POST['password'], time() + 3600);

        echo "Cookie Set Successfully.";
    }
    else
    {
        setcookie("username", "");
        setcookie("password", "");

        echo "Cookie Not Set!";
    }
}

if(isset($_POST['deleteBtn']))
{
    setcookie("username", "", time() - 3600);
    setcookie("password", "", time() - 3600);

    echo "Cookie Successfully Deleted.";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <center>
        <p><a href="login.php">Go To Login Page</a></p> <br><br>

        <form action="" method="POST">
            <button type="submit" name="deleteBtn">Delete Cookie</button>
        </form>
    </center>
</body>

</html>