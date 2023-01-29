<?php

namespace DesignPattern\Structural\Composite\Php;

use DesignPattern\Structural\Composite\Php\Interface\ComponentInterface;

class Group implements ComponentInterface {

    private array $components;

    /**
     * Add Component instance to components array
     * 
     * @param ComponentInterface $shape
     * @return void
     */
    public function add(ComponentInterface $shape) : void
    {
        array_push($this->components, $shape);
    }

    /**
     * Rendering all components element
     * 
     * @param void
     * @return void
     */
    public function render() : void
    {
        foreach ($this->components as $key => $component) {
            $component->render();
        }
    }
}