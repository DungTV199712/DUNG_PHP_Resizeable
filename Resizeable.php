<?php
interface Resizeable
{
    function resize($percent);
}
class Rectangle implements Resizeable
{
    private $width;
    private $height;
    public function __construct($height,$width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function getWidth()
    {
        return $this->width;
    }
    public function getHeight()
    {
        return $this->height;
    }
    public function getArea()
    {
        return $this->width * $this->height;
    }
    public function resize($percent)
    {
        $this->width = $this->width * $percent / 100;
        $this->height = $this->height * $percent / 100;
        return $this->height * $this->width;
    }
}
class Circle implements Resizeable
{
    private $radius;
    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getArea()
    {
        return pi() * $this->radius ** 2;
    }
    public function resize($percent)
    {
     $this->radius = $this->radius * $percent / 100;
     return pi() * $this->radius ** 2;
     // TODO: Implement resize() method.
    }
}
$rectangle = new Rectangle(4,5);
 echo 'Area of Rectangle: ' . $rectangle->getArea() . '<br>';
 echo  'new size of Rectangle : ' . $rectangle->resize(120) . '<br>';
$circle = new Circle(5);
echo 'Area of Circle : ' . $circle->getArea() . '<br>';
echo 'new size of circle : ' . $circle->resize(150);
$geometries = [$rectangle, $circle];
foreach ($geometries as $geometry) {
    $geometry->resize(200);
}
