<?php

class Student{
    public $name = 'rana';
    public $age = '23';

    public function sayHello()
    {
        return 'Hello';
    }

}

$student1 = new Student();
echo $student1->name;
echo '<br>';
echo $student1->age;
echo '<br>';
echo $student1->sayHello();
