<?php

namespace DesignPattern\Behavioral\Memento\Php;

class History {
    
    private array $states;

    /**
     * Push some value in states array
     * 
     * @param BrowserState $browserState
     * @return void
     */
    public function push(BrowserState $browserState) {
        $this->states[] = $browserState;
    }

    /**
     * Remove last element and return it.
     * 
     * @param void
     * @return 
     */
    public function pop() {
        $last_value = $this->states[count($this->states) - 1];
        array_pop($this->states);
        return $last_value;
    }
}