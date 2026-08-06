<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session View</title>
</head>

<body>
    <form action="logout.php" method="POST">
        <?php

        if (isset($_SESSION['username'])) {
            echo "Welcome" . $_SESSION['username'];
        }

        ?> <br><br>

        <button style="padding: 3px 10px; cursor: pointer;" type="submit" name="logoutBtn">Logout</button>
    </form>
</body>

</html>