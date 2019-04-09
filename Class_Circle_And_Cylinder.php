<?php
include_once "ClassCircle.php";
include_once "ClassCylinder.php";

function creatCircle(){
    $circle = new ClassCircle(5);
    echo $circle->getArea() ."<br>";
    echo $circle->getPerimeter() ."<br>";
}
creatCircle();

function creatCylinder(){
    $cylinder = new ClassCylinder(5, 5);
    echo $cylinder->getArea() . "<br>";
    echo $cylinder->getVolume();
}
creatCylinder();


