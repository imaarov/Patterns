<?php

namespace DesignPattern\Behavioral\Strategy\Php\Interface;

interface FilterInterface {
    public function apply(string $fileName) : void;
}