<?php

class BCA
{
    // Properties
    public $name;

    // Methods
    function set_name($name)
    {
        $this->name = $name;
    }

    function get_name()
    {
        return $this->name;
    }
}

$fybca = new BCA();
$sybca = new BCA();
$tybca = new BCA();

$fybca->set_name('DIV-A');
$sybca->set_name('DIV-B');
$tybca->set_name('DIV-C');

echo $fybca->get_name();
echo "<br>";
echo $sybca->get_name();
echo "<br>";
echo $tybca->get_name();

?>