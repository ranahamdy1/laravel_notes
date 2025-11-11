<?php

abstract class Student{
    public $name = 'rana';
    public function sayHello()
    {
        return 'Hello';
    }

    abstract public function getRole();

}

class School extends Student
{
    public function getRole()
    {
        return 'school';
    }

}

$school = new School();
echo $school->getRole();
