<?php

namespace Imaarov\Patterns\Structural\Decorator;

use Imaarov\Patterns\Structural\Decorator\Interface\StreamInterface;

class CloudStream implements StreamInterface{
    
    public function write(string $data) : void
    {
        echo "\nStoring : " . $data . PHP_EOL;
    }
}