<?php

namespace Imaarov\Patterns\Creational\Factory;

class Main {

    public function __construct()
    {
        # Make new product Controller
        $products = new ProductController();
        # Get products list
        $products->listProducts();
    }
}