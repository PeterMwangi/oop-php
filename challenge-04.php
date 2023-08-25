<?php

use Bicycle as GlobalBicycle;

class Bicycle{

    public static $instance_count = 0;

    public $brand;
    public $model;
    public $year;
    public $category;
    public $description = 'Used bicycle';
    protected $weight_kg = 0.0;
    protected static $wheels = 2;


    public const CATEGORIES = ['Road','Mountain','Hybrid','Cruiser','City','BMX'];

    public static function create(){
        $class_name = get_called_class();
        $obj = new $class_name;

        self::$instance_count++;
        return $obj;
    }

    public function name(){
        return $this->brand . " " . $this->model . " (". $this->year .") ";
    }


}



$trek = new Bicycle;
$trek->brand = 'Trek';
$trek->model = 'Emonda';
$trek->year = '2017';


echo 'Bicycle count: ' . Bicycle::$instance_count . '<br />';





?>