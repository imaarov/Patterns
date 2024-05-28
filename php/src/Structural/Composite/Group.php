<?php

namespace Imaarov\Patterns\Structural\Composite;

use Imaarov\Patterns\Structural\Composite\Interface\ComponentInterface;

class Group implements ComponentInterface {

    private array $components;

    public function __construct($component = null) {
        
        $this->components = $component;

    }

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
     * @return void
     */
    public function render() : void
    {
        foreach ($this->components as $key => $component) {
            $component->render();
        }
    }
}