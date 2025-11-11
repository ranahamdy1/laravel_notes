<?php

class Student {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function sayHello() {
        return "Hello, I am " . $this->name;
    }

    public function getRole() {
        return "I am a student";
    }
}

class School extends Student {
    public function getRole() {
        return "I am a school student";
    }

    // إعادة تعريف sayHello لإظهار Polymorphism
    public function sayHello() {
        return "Hello from school student: " . $this->name;
    }
}

class University extends Student {
    public function getRole() {
        return "I am a university student";
    }

    // إعادة تعريف sayHello لإظهار Polymorphism
    public function sayHello() {
        return "Hello from university student: " . $this->name;
    }
}

$student1 = new Student("Rana");
$school = new School("Ali");
$university = new University("Omar");

echo $student1->sayHello() . "<br>"; // Hello, I am Rana
echo $school->sayHello() . "<br>";   // Hello from school student: Ali
echo $university->sayHello() . "<br>"; // Hello from university student: Omar

echo "<br>";

echo $student1->getRole() . "<br>"; // I am a student
echo $school->getRole() . "<br>";   // I am a school student
echo $university->getRole() . "<br>"; // I am a university student
