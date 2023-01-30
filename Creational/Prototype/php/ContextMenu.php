<?php

namespace DesignPattern\Creational\Prototype\Php;

use DesignPattern\Creational\Prototype\Php\Interface\ComponentInterface;

class ContextMenu {

    /**
     * Make a copy from a component
     * 
     * @param ComponentInterface $componentInterface
     * @return void
     */
    public function duplicate(ComponentInterface $componentInterface)
    {
        $newComponent = $componentInterface->clone();
    }

}