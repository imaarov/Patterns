<?php

namespace DesignPattern\Creational\Prototype\Php\Interface;

interface ComponentInterface {
    public function render() : void;
    public function clone() : ComponentInterface;
}