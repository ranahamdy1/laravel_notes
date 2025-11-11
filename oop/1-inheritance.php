<?php

class Student{
    public $name = 'rana';
    public function sayHello()
    {
        return 'Hello';
    }

}

class School extends Student
{

}

$student1 = new Student();
$school = new School();
echo $student1->name;
echo '<br>';
echo $school->name;
echo '<br>';
echo $school->sayHello();
