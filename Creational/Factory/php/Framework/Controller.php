<?php

namespace DesignPattern\Creational\Factory\Php\Framework;

use DesignPattern\Structural\Facade\Php\Interface\ViewEngineInterface;

class Controller {

    /**
     * Base controller for rendering view
     * 
     * @param string $viewName
     * @param array $context
     * @return void
     */
    public function render(string $viewName, array $context) : void
    {
        $engine = $this->createViewEngine();
        $html = $engine->render($viewName, $context);
        echo PHP_EOL . $html . PHP_EOL;
    }

    /**
     * Create Custom or Defualt engine
     * 
     * @param void
     * @return ViewEngineInterface
     */
    protected function createViewEngine() : ViewEngineInterface
    {
        return new ViewEngine();
    }

    
}