<?php

namespace DesignPattern\Structural\AbstractFactory\Php\Material;

use DesignPattern\Structural\AbstractFactory\Php\Interface\TextboxInterface;

class MaterialTextbox implements TextboxInterface {

    /**
     * Render Textbox of Material Type
     * 
     * @param void
     * @return void
     */
    public function render(): void
    {
        echo "\n Material Text box \n";
    }

}