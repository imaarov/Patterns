<?php

namespace Imaarov\Patterns\Creational\Prototype\Interface;

interface ComponentInterface {
    public function render() : void;
    public function clone() : ComponentInterface;
}