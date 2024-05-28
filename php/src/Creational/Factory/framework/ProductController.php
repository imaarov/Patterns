<?php

namespace Imaarov\Patterns\Creational\Factory;

use Imaarov\Patterns\Creational\Factory\NewSources\NewController;

# It can be Extends the Controller or NewController
class ProductController extends NewController {

    /**
     * Get list of products
     * 
     * @return void
     */
    public function listProducts() : void
    {
        $context = array();
        $this->render("product.html", $context);
    }
}