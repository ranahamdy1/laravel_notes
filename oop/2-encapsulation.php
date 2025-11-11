<?php

class Student{
    public $name = 'rana';
    protected $age = '23';
    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
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
echo $student1->getAge();
echo '<br>';
echo $school->getAge();
echo '<br>';
$student1->setAge('22');
echo $student1->getAge();

