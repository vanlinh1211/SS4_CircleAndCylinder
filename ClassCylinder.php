<?php
include_once "ClassCircle.php";

class ClassCylinder extends ClassCircle
{
    public $height;

    public function __construct($radius, $height)
    {
        parent::__construct($radius);
        $this->height = $height;
    }

    public function getArea()
    {
        return parent::getArea() * 2 + parent::getPerimeter() * $this->height;
    }

    public function getVolume()
    {
        return parent::getArea() * $this->height;
    }
}