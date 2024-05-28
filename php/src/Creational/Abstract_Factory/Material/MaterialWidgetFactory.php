<?php

namespace Imaarov\Patterns\Creational\AbstractFactory\Material;

use Imaarov\Patterns\Structural\AbstractFactory\Interface\ButtonInterface;
use Imaarov\Patterns\Structural\AbstractFactory\Interface\TextboxInterface;
use Imaarov\Patterns\Structural\AbstractFactory\Interface\WidgetFactoryInterface;
use Imaarov\Patterns\Structural\AbstractFactory\Material\MaterialButton;
use Imaarov\Patterns\Structural\AbstractFactory\Material\MaterialTextbox;

class MaterialWidgetFactory implements WidgetFactoryInterface{

    /**
     * Create Button in Material type
     * 
     * @return ButtonInterface
     */
    public function createButton(): ButtonInterface
    {
        return new MaterialButton();        
    }

    /**
     * Create Textbox of Material Type
     * 
     * @return TextboxInterface
     */
    public function createTextbox(): TextboxInterface
    {
        return new MaterialTextbox();
    }

}