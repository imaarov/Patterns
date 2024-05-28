<?php

namespace Imaarov\Patterns\Structural\AbstractFactory\Interface;

interface WidgetFactoryInterface {
    public function createButton() : ButtonInterface;
    public function createTextbox() : TextboxInterface;
}