<?php

namespace Imaarov\Patterns\Structural\AbstractFactory\Ant;

use Imaarov\Patterns\Structural\AbstractFactory\Interface\TextboxInterface;

class AntTextbox implements TextboxInterface {

    /**
     * Rendering Textbox in Ant lib
     * 
     * @return void
     */
    public function render(): void
    {
        echo "\n Ant Text box \n";
    }

}