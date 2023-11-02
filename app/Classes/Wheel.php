<?php

namespace App\Classes;
class Wheel
{
    protected string $wheel_type;
    protected string $size;

    public function __construct($wheel_type, $size)
    {
        $this->wheel_type = $wheel_type;
        $this->size = $size;
    }

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
