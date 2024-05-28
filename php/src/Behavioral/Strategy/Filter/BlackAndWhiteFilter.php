<?php

namespace Imaarov\Patterns\Behavioral\Strategy\Filter;

use Imaarov\Patterns\Behavioral\Strategy\Interface\FilterInterface;

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