<?php

namespace DesignPattern\Creational\Factory\Php\Framework;

use DesignPattern\Creational\Factory\Php\Interface\ViewEngineInterface;



class ViewEngine implements ViewEngineInterface{

    /**
     * Base or Default view engine
     * 
     * @param string $viewName
     * @param array $context
     * @return string
     */
    public function render(string $viewName, array $context) : string
    {
        return "view rendered";
    }

    
}