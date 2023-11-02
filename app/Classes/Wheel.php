<?php

namespace App\Classes;
class Wheel
{
    protected string $wheel_type;
    protected string $size;

    //Create a constructor that takes in all of the properties as parameters
    public function __construct($wheel_type, $size)
    {
        $this->wheel_type = $wheel_type;
        $this->size = $size;
    }

    //Create getters and setters for each of the properties
    public function getWheelType()
    {
        return $this->wheel_type;
    }

    public function setWheelType($wheel_type)
    {
        $this->wheel_type = $wheel_type;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;
    }
}
