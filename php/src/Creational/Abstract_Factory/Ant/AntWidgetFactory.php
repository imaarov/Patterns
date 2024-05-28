<?php

namespace Imaarov\Patterns\Creational\AbstractFactory\Ant;

use Imaarov\Patterns\Structural\AbstractFactory\Ant\AntButton;
use Imaarov\Patterns\Structural\AbstractFactory\Ant\AntTextbox;
use Imaarov\Patterns\Structural\AbstractFactory\Interface\ButtonInterface;
use Imaarov\Patterns\Structural\AbstractFactory\Interface\TextboxInterface;
use Imaarov\Patterns\Structural\AbstractFactory\Interface\WidgetFactoryInterface;

class AntWidgetFactory implements WidgetFactoryInterface{

    /**
     * Create Button of Ant type
     * 
     * @return ButtonInterface
     */
    public function createButton(): ButtonInterface
    {
        return new AntButton();
    }

    /**
     * Create TextBox of Ant Type
     * 
     * @return TextboxInterface
     */
    public function createTextbox(): TextboxInterface
    {
        return new AntTextbox();
    }
 
}