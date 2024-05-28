<?php

namespace Imaarov\Patterns\Structural\AbstractFactory\Material;

use Imaarov\Patterns\Structural\AbstractFactory\Interface\TextboxInterface;

class MaterialTextbox implements TextboxInterface {

    /**
     * Render Textbox of Material Type
     * 
     * @return void
     */
    public function render(): void
    {
        echo "\n Material Text box \n";
    }

}