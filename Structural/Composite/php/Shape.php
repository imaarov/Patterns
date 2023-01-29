<?php

namespace DesignPattern\Structural\Composite\Php;

use DesignPattern\Structural\Composite\Php\Interface\ComponentInterface;

class Shape implements ComponentInterface {

    /**
     * Rendering
     * 
     * @param void
     * @return void
     */
    public function render() : void
    {
        echo "\nRender Shape\n";
    }
}