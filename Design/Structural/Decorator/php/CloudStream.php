<?php

namespace DesignPattern\Structural\Decorator\Php;

use DesignPattern\Structural\Decorator\Php\Interface\StreamInterface;

class CloudStream implements StreamInterface{
    
    public function write(string $data) : void
    {
        echo "\nStoring : " . $data . PHP_EOL;
    }
}