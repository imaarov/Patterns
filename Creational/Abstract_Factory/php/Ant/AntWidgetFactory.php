<?php

namespace DesignPattern\Creational\AbstractFactory\Php\Ant;

use DesignPattern\Structural\AbstractFactory\Php\Ant\AntButton;
use DesignPattern\Structural\AbstractFactory\Php\Ant\AntTextbox;
use DesignPattern\Structural\AbstractFactory\Php\Interface\ButtonInterface;
use DesignPattern\Structural\AbstractFactory\Php\Interface\TextboxInterface;
use DesignPattern\Structural\AbstractFactory\Php\Interface\WidgetFactoryInterface;

class AntWidgetFactory implements WidgetFactoryInterface{

    /**
     * Create Button of Ant type
     * 
     * @param  void
     * @return ButtonInterface
     */
    public function createButton(): ButtonInterface
    {
        return new AntButton();
    }

    /**
     * Create TextBox of Ant Type
     * 
     * @param void
     * @return TextboxInterface
     */
    public function createTextbox(): TextboxInterface
    {
        return new AntTextbox();
    }
 
}