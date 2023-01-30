<?php

namespace DesignPattern\Creational\Factory\Php\New;

use DesignPattern\Structural\Facade\Php\Interface\ViewEngineInterface;

class NewViewEngine implements ViewEngineInterface {

    public function render(string $viewName, array $context)
    {
        return "View rendered by new view engine";
    }


    
}