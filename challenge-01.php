

<?php

//Bicycle class for test


class Bicycle
{
    var $brand;
    var $model;
    var $year;
    var $description;
    var $weight_kg;


    function name()
    {
        return $this->brand . " " . $this->model . " (" . $this->year . ")";
    }

    function weight_lbs()
    {
        return floatval($this->weight_kg) * 2.2046226218;
    }
}


$twowheel = new Bicycle;
$twowheel->brand = 'BMX';
$twowheel->model = 'Generation Z';
$twowheel->year = '2018';
$twowheel->description = 'This is a 2018 Generation Z bicycle';
$twowheel->weight_kg = '900';



echo $twowheel->name() . "</br>";

echo $twowheel->weight_lbs() . "</br>";
