<?php

namespace DesignPattern\Creational\Factory\Php\New;

use DesignPattern\Structural\Facade\Php\Interface\ViewEngineInterface;

class NewViewEngine implements ViewEngineInterface {

    /**
     * Custom render for new view engine
     * 
     * @param string $viewName
     * @param array $context
     * @return void
     */
    public function render(string $viewName, array $context)
    {
        return "View rendered by new view engine";
    }


    
}