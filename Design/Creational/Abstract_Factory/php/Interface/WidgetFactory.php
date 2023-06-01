<?php

namespace DesignPattern\Structural\AbstractFactory\Php\Interface;

interface WidgetFactoryInterface {
    public function createButton() : ButtonInterface;
    public function createTextbox() : TextboxInterface;
}