<?php

namespace Imaarov\Patterns\Creational\Factory\NewSources;

use Imaarov\Patterns\Creational\Factory\Interface\ViewEngineInterface;


class NewViewEngine implements ViewEngineInterface {

    /**
     * Custom render for new view engine
     * 
     * @param string $viewName
     * @param array $context
     * @return void
     */
    public function render(string $viewName, array $context) : string
    {
        return "View rendered by new view engine";
    }


    
}