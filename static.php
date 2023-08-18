<?php

use Student as GlobalStudent;

class Student
{

    public static $grades = ['Freshman', 'Sophomore', 'Junior', 'Senior'];
}

class PartTimeStudent extends Student
{
}

echo PartTimeStudent::$grades[0];

echo "<br/>";

PartTimeStudent::$grades[] = 'Alumni';

echo implode(', ', Student::$grades);
