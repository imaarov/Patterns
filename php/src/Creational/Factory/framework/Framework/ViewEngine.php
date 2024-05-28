<?php

namespace Imaarov\Patterns\Creational\Factory\Framework;

use Imaarov\Patterns\Creational\Factory\Interface\ViewEngineInterface;



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