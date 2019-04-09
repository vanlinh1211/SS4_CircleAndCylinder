<?php

class ClassCircle
{
    public $radius;
    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    function getPerimeter(){
        return pi() * $this->radius * 2;
    }

    function getArea(){
        return pi() * pow($this->radius, 2);
    }

    function getColor(){
        $red = 255;
        $green = 0;
        $blue = 0;
        return "rgb(". $red . "," . $blue ."," . $green .")";
    }
}