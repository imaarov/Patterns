<?php

namespace DesignPattern\Structural\Facade\Php\Interface;

interface ViewEngineInterface {
    public function render(string $viewName, array $context);
}