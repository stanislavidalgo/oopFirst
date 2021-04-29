<?php

class AbstractProduct
{
    protected $name;

    protected $sku;

    protected $price;

    protected $description;


    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPriceWithTaxes()
    {
        return $this->price * 1.21;
    }


}
