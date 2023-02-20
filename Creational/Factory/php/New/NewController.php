<?php

namespace DesignPattern\Creational\Factory\Php\New;

use DesignPattern\Creational\Factory\Php\Framework\Controller;
use DesignPattern\Creational\Factory\Php\Interface\ViewEngineInterface;

class NewController extends Controller {


    /**
     * Create new view engine
     * 
     * @param void
     * @return ViewEngineInterface
     */
    public function createViewEngine() : ViewEngineInterface
    {
        return new NewViewEngine();
    }


    
}