<?php

namespace App\Classes;

class Bicycle
{
    protected string $name;
    protected string $description;
    protected float $price;
    protected string $color;
    protected string $type;
    protected Wheel $wheels;
    protected Bool $basket;
    protected string $size;
    protected Bool $hand_brakes;
    public function __construct($name, $description, $price, $color, $type, $wheels, $basket, $size, $hand_brakes)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->color = $color;
        $this->type = $type;
        $this->wheels = $wheels;
        $this->basket = $basket;
        $this->size = $size;
        $this->hand_brakes = $hand_brakes;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getWheels()
    {
        return $this->wheels;
    }

    public function setWheels($wheels)
    {
        $this->wheels = $wheels;
    }

    public function getBasket()
    {
        return $this->basket;
    }

    public function setBasket($basket)
    {
        $this->basket = $basket;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;
    }
    public function getHandBrakes()
    {
        return $this->hand_brakes;
    }
    public function setHandBrakes($hand_brakes)
    {
        $this->hand_brakes = $hand_brakes;
    }


}

