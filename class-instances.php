<?php

class Student{

}

$person1 = new Student;

$person2 = new Student;

echo get_class($person1) . "<br />";

$class_names = ['Product', 'Student', 'student'];
foreach($class_names as $class_name){
    if(is_a($person1, $class_name)){
        echo "Student is a {$class_name}.<br />";
    }else{
        echo "Student is not a {$class_name}.<br />";
    }
}

?>