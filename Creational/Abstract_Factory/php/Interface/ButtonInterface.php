<?php

namespace DesignPattern\Structural\AbstractFactory\Php\Interface;

interface ButtonInterface extends WidgetInterface {
    public function render() : void;
}