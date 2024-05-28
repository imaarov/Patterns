<?php

namespace Imaarov\Patterns\Behavioral\Memento;

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
     * @return BrowserState
     */
    public function pop() : BrowserState 
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