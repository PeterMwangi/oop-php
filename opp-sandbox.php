<?php

class Student{

}

$classes = get_declared_classes();

echo "Classes:" . implode(',', $classes) ."<br />";

$class_names = ['Product', 'Student', 'students'];
 foreach($class_names as $class_name){
    if(class_exists($class_name)){
        echo "{$class_name} is declared class. <br />";
    }else{
        echo "{$class_name} is not declared class. <br />";
    }
 }











?>