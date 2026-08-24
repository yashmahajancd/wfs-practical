<?php
    $cars = array("BMW", "MARUTI", "AUDI");
    echo "Total Cars : " . count($cars);
?>

<hr>

<?php
    $cars = array("BMW","AUDI","MARUTI");
    list($name1, $name2, $name3) = $cars;
    echo $name1 . "<br>" . $name2 . "<br>" . $name3 . "<br>";
    // print_r($cars);
?>

<hr>

<?php
    // Array 1
    $my_array1 = array("Veer","Raj","Rahul");

    if(in_array("Raj", $my_array1))
    {
        echo "String Found in Array <br>";
    }
    else
    {
        echo "String Not Found in Array <br>";
    }


    // Array 2
    $my_array2 = array(11, 22, 33);

    if(in_array("11", $my_array2, true))
    {
        echo "String Found in Array <br>";
    }
    else
    {
        echo "String Not Found in Array <br>";
    }


    // Array 3
    $my_array3 = array(11, 22, 33);

    if(in_array("11", $my_array3, false))
    {
        echo "String Found in Array <br>";
    }
    else
    {
        echo "String Not Found in Array <br>";
    }
?>

<hr>

<?php
    $cars = array("BMW", "AUDI", "MARUTI");
    echo current($cars) . "<br>";
    echo next($cars) . "<br>";
    echo prev($cars) . "<br>";
    echo end($cars);
?>

<hr>

<?php
    $cars = array("BMW", "AUDI", "MARUTI");
    foreach ($cars as $key => $value)
    {
        echo "Key : $key, Value : $value <br>";
    }
?>

<hr>

<?php
    $cars = array("BMW", "AUDI", "MARUTI");
    $colors = array("BLACK", "WHITE", "BLUE");
    $models = array_merge($cars, $colors);
    print_r($models);
?>

<hr>

<?php
    $cars = array("BMW", "AUDI", "MARUTI");
    print_r($cars);
    echo "<br>";
    $rev = array_reverse($cars);
    print_r($rev);
?>