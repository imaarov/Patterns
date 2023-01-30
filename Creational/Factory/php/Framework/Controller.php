<?php

namespace DesignPattern\Creational\Factory\Php\Framework;

use DesignPattern\Structural\Facade\Php\Interface\ViewEngineInterface;

class Controller {

    public function render(string $viewName, array $context) : void
    {
        $engine = $this->createViewEngine();
        $html = $engine->render($viewName, $context);
        echo PHP_EOL . $html . PHP_EOL;
    }

    protected function createViewEngine() : ViewEngineInterface
    {
        return new ViewEngine();
    }

    
}