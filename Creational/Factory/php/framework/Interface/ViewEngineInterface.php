<?php

namespace DesignPattern\Creational\Factory\Php\Interface;

interface ViewEngineInterface {
    public function render(string $viewName, array $context);
}