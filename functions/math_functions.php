<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing</title>
</head>

<body style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
    <center>
        <h2>------- MATHS FUNCTIONS -------</h2> <br>

        <form action="" method="POST" name="form1">
            <td>Enter Value : </td>
            <td><input type="text" name="txtnumber" required></td> <br><br>
            <td><button type="submit" name="btnsubmit">Submit</button></td>
        </form>
    </center>
</body>

</html>


<?php

if (isset($_POST['btnsubmit'])) {
    $value = $_POST['txtnumber'];
    echo "abs : " . abs($value) . "<br>";
    echo "ceil : " . ceil($value) . "<br>";
    echo "floor : " . floor($value) . "<br>";
    echo "round : " . round($value) . "<br><hr>";

    $a = 5;
    $b = 2;
    $c = fmod($a, $b);
    echo "fmod of $a and $b is " . ($c) . "<br><hr>";

    echo "[10,40,50,5,90]<br>";
    echo "-------------------<br>";
    echo "Minimum : " . min(10, 40, 50, 5, 90) . "<br>";
    echo "Maximum : " . max(10, 40, 50, 5, 90) . "<br><hr>";

    echo "pow of (2, 3) is " . pow(2, 3) . "<br>";
    echo "pow of (-2, 3) is " . pow(-2, 3) . "<br><hr>";

    echo "Square Root of $value : " . sqrt($value) . "<br><hr>";

    $d = rand();
    echo "rand() : " . $d . "<br>";

    $e = rand(1, 50);
    echo "rand(1, 50) : " . $e;
}

?>