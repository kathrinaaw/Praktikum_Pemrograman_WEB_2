<?php
abstract class Shape {
abstract public function area();
}
class Rectangle extends Shape {
private $width;
private $height;
public function __construct($width, $height) {
$this->width = $width;
$this->height = $height;
}
public function area() {
return $this->width * $this->height;
}
}
class Circle extends Shape {
private $radius;
public function __construct($radius) {
$this->radius = $radius;
}
public function area() {
return pi() * pow($this->radius, 2);
}
}
$rectangle = new Rectangle(5, 10);
echo "Area of Rectangle: ". $rectangle->area()." "; // Output: Area of Rectangle:50
$circle = new Circle(7);
echo "Area of Circle: " . $circle->area(); // Output: Area of Circle:153.9380400259
?>