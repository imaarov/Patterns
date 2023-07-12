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
     * @param string
     * @return 
     */
    public function pop() : string 
    {
        $last_value = $this->states[count($this->states) - 1];
        array_pop($this->states);
        return $last_value;
    }

    /**
     * Show all saved history
     *
     * @return array
     */
    public function showAllHistory() : array
    {
        return $this->states;
    }
}