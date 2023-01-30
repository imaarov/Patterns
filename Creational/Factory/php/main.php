<?php

namespace DesignPattern\Creational\Factory\Php;

class Main {

    public function __construct()
    {
        $products = new ProductController();
        $products->listProducts();
    }
}