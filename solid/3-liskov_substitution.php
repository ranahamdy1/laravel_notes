<?php

// الأب: Bird
class Bird {
    public function eat() {
        echo "Bird is eating\n";
    }
}

// الابن: FlyingBirds يرث من Bird ويضيف القدرة على الطيران
class FlyingBirds extends Bird {
    public function fly() {
        echo "Bird is flying\n";
    }
}

// ابن آخر: Penguin يرث من Bird لكنه لا يطير
class Penguin extends Bird {
    public function eat() {
        echo "Penguin is eating\n";
    }
}

// ابن آخر: Swan يرث من FlyingBirds ويحدد سلوكه الخاص للطيران والأكل
class Swan extends FlyingBirds {
    public function fly() {
        echo "Swan is flying\n";
    }

    public function eat() {
        echo "Swan is eating\n";
    }
}

$bird = new Bird();
$bird->eat();

$flyingBird = new FlyingBirds();
$flyingBird->eat();
$flyingBird->fly();

$penguin = new Penguin();
$penguin->eat();

$swan = new Swan();
$swan->eat();
$swan->fly();
