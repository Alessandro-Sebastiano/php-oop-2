<?php

class Product
{

    public $name;
    public $img;
    public $price;
    public $type;
    public $category;


    function __construct(string $_name, string $_img, int $_price, string $_type, string $_category)
    {

        $this->name = $_name;
        $this->img = $_img;
        $this->price = $_price;
        $this->type = $_type;
        $this->category = $_category;
    }
}
