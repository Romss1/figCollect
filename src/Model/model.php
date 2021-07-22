<?php

class admin
{
    private float $price;
    private string $name;
    private mixed $image;

    public function setImage(mixed $image)
    {
         $this->image = $image;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setPrice(float $price)
    {
        $this->price = $price;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getName()
    {
        return $this->name;
    }

}