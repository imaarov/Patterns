<?php

namespace DesignPattern\Creational\Php;

class History {
    
    private array $states;

    public function push(BrowserState $browserState) {
        $this->states[] = $browserState;
    }
}