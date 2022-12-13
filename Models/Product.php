<?php

class Product
{

    public $name;
    public $img;
    public $price;


    function __construct(string $_name, string $_img, int $_price)
    {

        $this->name = $_name;
        $this->img = $_img;
        $this->price = $_price;
    }
}
