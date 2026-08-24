<?php
    $cars = array("Volvo", "BMW", "Toyota");
    sort($cars);
    print_r($cars);
?>

<hr>

<?php
    $numbers = array(4, 6, 2, 22, 11, 's', 't', "abc", "xyz");
    sort($numbers);
    print_r($numbers);
?>

<hr>

<?php
    $cars = array("Volvo", "BMW", "Toyota");
    rsort($cars);
    print_r($cars);
?>

<hr>

<?php
    $numbers = array(4, -6, 2, 2, 2.2, 11, 's', 's', 't', "abc", "XYZ", "xyz"); 
    rsort($numbers);
    print_r($numbers);
?>

<hr>

<?php
    $age = array("Peter"=>"35", "Ben"=>"10", "Joe"=>"43");
    asort($age);
    print_r($age);
?>

<hr>

<?php
    $age = array("10"=>"35", "20"=>"10", "30"=>"43");
    asort($age);
    print_r($age);
?>

<hr>

<?php
    $str = "Hello Welcome To The World of PHP";
    echo substr($str, 0, 5) . "<br>";   // Hello
    echo substr($str, -3) . "<br>";   // PHP
    echo substr($str, 6) . "<br>";   // Welcome To The World of PHP
    echo substr($str, -6) . "<br>";   // of PHP
    echo substr($str, 6, 10);   // Welcome To
?>