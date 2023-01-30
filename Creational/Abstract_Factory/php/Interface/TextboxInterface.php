<?php

namespace DesignPattern\Structural\AbstractFactory\Php\Interface;

interface TextboxInterface extends WidgetInterface {
    public function render() : void;
}