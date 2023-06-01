<?php

namespace DesignPattern\Structural\AbstractFactory\Php\Ant;

use DesignPattern\Structural\AbstractFactory\Php\Interface\ButtonInterface;

class AntButton implements ButtonInterface {

    /**
     * Rendering Button in Ant lib
     * 
     * @param void
     * @return void
     */
    public function render(): void
    {
        echo "\n Ant Button \n";
    }

}