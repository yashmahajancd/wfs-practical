<?php
    date_default_timezone_set('Asia/Kolkata');
    echo date("d/m/y") . "<br>";
    echo date("j") . "<br>";
    echo date("l") . "<br>";
    echo date("n") . "<br>";
    echo date("g") . "<br>";
    echo date("D/M/Y") . "<br>";
    echo date("l/F/y") . "<br>";
    echo date("d/m/y  h : i : s a") . "<br>";
?>

<hr>

<?php
    echo "<pre>";
    print_r(getdate());
    echo "<pre/>";
?>

<hr>

<?php
    if(checkdate(8, 3, 1985))
    {
        echo "Date is Valid. <br>";
    }
    else
    {
        echo "Date is NOT Valid. <br>";
    }
?>

<hr>

<?php
    date_default_timezone_set('Asia/Kolkata');
    echo "Current Time : " . time();
?>

<hr>

<?php
    $d = mktime(7, 12, 50, 7, 21, 2021);   // h, m, s, m, d, y
    echo "Created date is " . date("Y-m-d h:i:s", $d);
?>