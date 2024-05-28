<?php

namespace Imaarov\Patterns\Creational\Factory\Interface;

interface ViewEngineInterface {
    public function render(string $viewName, array $context);
}