<?php

namespace DesignPattern\Structural\AbstractFactory\Php\Ant;

use DesignPattern\Structural\AbstractFactory\Php\Interface\TextboxInterface;

class AntTextbox implements TextboxInterface {

    /**
     * Rendering Textbox in Ant lib
     * 
     * @param void
     * @return void
     */
    public function render(): void
    {
        echo "\n Ant Text box \n";
    }

}