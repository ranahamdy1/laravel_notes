<?php
abstract class Calc
{
    abstract public function calculate();
}
class GetArea extends Calc
{
    private $length;
    private $width;
    public function __construct($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    public function calculate()
    {
        return $this->length * $this->width;
    }
}

class GetPerimeter extends Calc
{
    private $length;
    private $width;
    public function __construct($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
    }
    public function calculate()
    {
        return 2 * ($this->length + $this->width);
    }
}

// Shape يعتمد على abstraction (Calc) وليس على concrete class مباشرة
class Shape
{
    private $calc;
    public function __construct(Calc $calc)
    {
        $this->calc = $calc;
    }

    public function getShapeValue()
    {
        return $this->calc->calculate();
    }
}

$getArea = new GetArea(5, 3);
$getAreaShape = new Shape($getArea);
echo "Area: " . $getAreaShape->getShapeValue() . "\n";

$getPerimeter = new GetPerimeter(5, 3);
$getPerimeterShape = new Shape($getPerimeter);
echo "Perimeter: " . $getPerimeterShape->getShapeValue() . "\n";
