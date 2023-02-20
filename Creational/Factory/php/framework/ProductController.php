<?php

namespace DesignPattern\Creational\Factory\Php;

use DesignPattern\Creational\Factory\Php\New\NewController;

# It can be Extends the Controller or NewController
class ProductController extends NewController {

    /**
     * Get list of products
     * 
     * @param void
     * @return void
     */
    public function listProducts() : void
    {
        $context = array();
        $this->render("product.html", $context);
    }
}