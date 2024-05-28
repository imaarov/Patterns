<?php

namespace Imaarov\Patterns\Structural\AbstractFactory\Interface;

interface TextboxInterface extends WidgetInterface {
    public function render() : void;
}