<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing</title>
</head>

<body style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
    <center>
        <h2>------- STRING FUNCTIONS -------</h2> <br>

        <form action="" method="POST" name="form1">
            <td>Enter Value : </td>
            <td><input type="text" name="txtvalue" required></td> <br><br>
            <td><button type="submit" name="btnsubmit">Submit</button></td>
        </form>
    </center>
</body>

</html>


<?php

if(isset($_POST['btnsubmit']))
{
    $value=$_POST['txtvalue'];   // Hello Welcome to the world of PHP

    echo chr(97) . "<br>";
    echo ord("a") . "<br>";
    echo ord($value) . "<br><hr>";

    echo strtolower($value) . "<br>";
    echo strtoupper($value) . "<br>";
    echo strlen($value) . "<br><hr>";
    
    echo ltrim($value) . "<br>";
    echo rtrim($value) . "<br>";
    echo trim($value) . "<br><hr>";

    echo substr($value, 6) . "<br>";
    echo substr($value, -4) . "<br>";
    echo substr($value, 3, 10) . "<br>";
    echo substr($value, 0, 5) . "<br>";
    echo substr($value, -3) . "<br><hr>";

    $a = "hello all!";
	$b = "hello";
    if(strcmp($a, $b) == 0)
    {
        echo "String are equal" . "<br>";
    }
    elseif(strcmp($a, $b) < 0)
    {
        echo "$a is less than $b" . "<br>";
    }
    elseif(strcmp($a, $b) > 0)
    {
        echo "$a is greater than $b" . "<br>";
    }

    echo "<hr>";

    $c = "HELLO";
	$d = "hello";
    if(strcasecmp($c, $d) == 0)
    {
        echo "String are equal". "<br>";
    }
    elseif(strcmp($c, $d) < 0)
    {
        echo "$c is less then $d" . "<br>";
    }
	elseif(strcmp($c, $d) > 0)
    {
        echo "$c is greater than $d" . "<br>";
    }
}

?>