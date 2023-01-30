<?php

namespace DesignPattern\Creational\Factory\Php\Framework;

use DesignPattern\Structural\Facade\Php\Interface\ViewEngineInterface;

class ViewEngine implements ViewEngineInterface{

    public function render(string $viewName, array $context) : string
    {
        return "view rendered";
    }

    
}