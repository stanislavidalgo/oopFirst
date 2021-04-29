<?php
include_once 'AbstractProduct.php';

class Product extends AbstractProduct
{
    protected $qty;

    protected $weight;

    public function getQty()
    {
        return $this->qty;
    }

    public function setQty($qty)
    {
        $this->qty = $qty;
    }

}