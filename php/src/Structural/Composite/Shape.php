<?php

namespace Imaarov\Patterns\Structural\Composite;

use Imaarov\Patterns\Structural\Composite\Interface\ComponentInterface;

class Shape implements ComponentInterface {

    /**
     * Rendering
     * 
     * @return void
     */
    public function render() : void
    {
        echo "\nRender Shape\n";
    }
}