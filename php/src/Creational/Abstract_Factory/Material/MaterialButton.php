<?php

namespace Imaarov\Patterns\Structural\AbstractFactory\Material;

use Imaarov\Patterns\Structural\AbstractFactory\Interface\ButtonInterface;

class MaterialButton implements ButtonInterface {

    /**
     * Render Button of Material Type
     * 
     * @return void
     */
    public function render(): void
    {
        echo "\n Material Button \n";
    }

}