<?php

namespace DesignPattern\Creational\Prototype\Php;

use DesignPattern\Creational\Prototype\Php\Interface\ComponentInterface;

class Circle implements ComponentInterface {
    
    private int $raduis;

    /**
     * Render Some obj
     * 
     * @param void
     * @return void
     */
    public function render(): void
    {
        echo "\nRendering Circle\n";
    }

    /**
     * Clone logic that implement from interface
     * 
     * @param void
     * @return ComponentInterface $newClone
     */
    public function clone(): ComponentInterface
    {
        $newClone = new Circle();
        $newClone->setRaduis($this->raduis);
        return $newClone;
    }

    /**
     * Set Raduis propery
     * 
     * @param int $raduis
     * @return void
     */
    public function setRaduis(int $raduis)
    {
        $this->raduis = $raduis;
    }

    /**
     * Get Raduis propery
     * 
     * @param void
     * @return int $raduis
     */
    public function getRaduis()
    {
        return $this->raduis;
    }
}