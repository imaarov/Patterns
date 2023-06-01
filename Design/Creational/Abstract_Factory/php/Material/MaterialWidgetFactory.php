<?php

namespace DesignPattern\Creational\AbstractFactory\Php\Material;

use DesignPattern\Structural\AbstractFactory\Php\Interface\ButtonInterface;
use DesignPattern\Structural\AbstractFactory\Php\Interface\TextboxInterface;
use DesignPattern\Structural\AbstractFactory\Php\Interface\WidgetFactoryInterface;
use DesignPattern\Structural\AbstractFactory\Php\Material\MaterialButton;
use DesignPattern\Structural\AbstractFactory\Php\Material\MaterialTextbox;

class MaterialWidgetFactory implements WidgetFactoryInterface{

    /**
     * Create Button in Material type
     * 
     * @param void
     * @return ButtonInterface
     */
    public function createButton(): ButtonInterface
    {
        return new MaterialButton();        
    }

    /**
     * Create Textbox of Material Type
     * 
     * @param void
     * @return TextboxInterface
     */
    public function createTextbox(): TextboxInterface
    {
        return new MaterialTextbox();
    }

}