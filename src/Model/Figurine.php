<?php
namespace App\Model;

class Figurine
{
    private float $price;
    private string $description;
    private float $dimension;
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

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setDimension(float $dimension)
    {
        $this->dimension = $dimension;
    }

    public function setPrice(float $price)
    {
        $this->price = $price;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getDimension()
    {
        return $this->dimension;
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