<?php
    // Function Definition
    function DisplayAddress()
    {
        echo "Mr. Yash Mahajan" . "<br>";
    }

    // Calling Function
    DisplayAddress();
?>

<hr>

<?php
    function Add($a, $b)
    {
        $c = $a + $b;
        echo "Addition is : " . $c;
    }

    Add(10, 20);
?>

<hr>

<?php
    function Sum($a, $b)
    {
	    $c = $a + $b;
	    return $c;
    }

    echo "Sum : " . Sum(10, 20);
?>

<hr>

<?php
    function Area($r, $pi = 3.14)
    {
        $A = $pi * $r * $r;
        return $A;
    }

    $r = 3;
    echo "Area of Circle with $r is : " . Area($r);
?>