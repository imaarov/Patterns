<?php

namespace Imaarov\Patterns\Structural\AbstractFactory\Interface;

interface ButtonInterface extends WidgetInterface {
    public function render() : void;
}