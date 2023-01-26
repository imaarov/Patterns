<?php

namespace DesignPattern\Behavioral\Strategy\Php\Filter;

use DesignPattern\Behavioral\Strategy\Php\Interface\FilterInterface;

class BlackAndWhiteFilter implements FilterInterface {
    
    /**
     * Filtering the image with black and white filter
     * 
     * @param string $fileNmae
     * @return void
     */
    public function apply(string $fileName): void
    {
        echo "\napply black and white filter \n";        
    }
}