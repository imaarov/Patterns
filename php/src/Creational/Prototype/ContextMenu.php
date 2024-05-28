<?php

namespace Imaarov\Patterns\Creational\Prototype;

use Imaarov\Patterns\Creational\Prototype\Interface\ComponentInterface;

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