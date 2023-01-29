<?php

namespace DesignPattern\Structural\Proxy\Php\Interface;

interface EBookInterface {
    public function show() : void;
    public function getFileName() : string;
}