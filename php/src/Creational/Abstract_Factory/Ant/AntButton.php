<?php

namespace Imaarov\Patterns\Structural\AbstractFactory\Ant;

use Imaarov\Patterns\Structural\AbstractFactory\Interface\ButtonInterface;

class AntButton implements ButtonInterface {

    /**
     * Rendering Button in Ant lib
     * 
     * @return void
     */
    public function render(): void
    {
        echo "\n Ant Button \n";
    }

}