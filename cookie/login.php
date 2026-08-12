<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Page</title>
</head>

<body>
    <center>
        <h2 style="background-color: gray; color: white">FORM</h2>

        <form style="background-color: #d4d4d4; padding: 20px 0px;" action="" method="POST">

            <label for="username">Username: </label>
            <input
                type="text"
                name="username"
                id="username"
                value="<?php if (isset($_COOKIE['username'])) {
                            echo $_COOKIE['username'];
                        } ?>"
                required>
            <br><br>

            <label for="password">Password: </label>
            <input
                type="password"
                name="password"
                id="password"
                value="<?php if (isset($_COOKIE['password'])) {
                            echo $_COOKIE['password'];
                        } ?>"
                required>
            <br><br>

            <input type="checkbox" name="remember"> Remember Me <br><br>

            <button style="padding: 3px 10px; cursor: pointer;" type="submit" name="submitBtn">Login</button>

        </form>
    </center>
</body>

</html>