<?php

namespace DesignPattern\Structural\AbstractFactory\Php\Material;

use DesignPattern\Structural\AbstractFactory\Php\Interface\ButtonInterface;

class MaterialButton implements ButtonInterface {

    /**
     * Render Button of Material Type
     * 
     * @param void
     * @return void
     */
    public function render(): void
    {
        echo "\n Material Button \n";
    }

}