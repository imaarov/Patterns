<?php

namespace Imaarov\Patterns\Creational\Factory\Framework;

use Imaarov\Patterns\Creational\Factory\Interface\ViewEngineInterface;


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
     * @return ViewEngineInterface
     */
    protected function createViewEngine() : ViewEngineInterface
    {
        return new ViewEngine();
    }

    
}