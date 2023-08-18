

<?php

//Bicycle class for test


class Bicycle
{
    public $brand;
    public $model;
    public $year;
    public $description = 'Used bicycle';
    public $weight_kg = 0.0;
    protected $wheels = 2;


    public function name()
    {
        return $this->brand . " " . $this->model . " (" . $this->year . ")";
    }

    public function weight_lbs()
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
