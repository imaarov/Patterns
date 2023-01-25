<?php

namespace DesignPattern\Behavioral\Iterator\Php\Iterator;

use DesignPattern\Behavioral\Iterator\Php\Collection;
use DesignPattern\Behavioral\Iterator\Php\Interface\IteratorInterface;

class ArrayIterator implements IteratorInterface {

    private int $index = 0;

    /**
     * Get Collection first for iterate it in ARRAY way
     * 
     * @param void
     * @return void
     */
    public function __construct(
        protected Collection $collection
    )
    { }

    /**
     * Return true if there any next element in this aray
     * 
     * @param void
     * @return bool
     */
    public function hasNext() : bool 
    {
        return ($this->index < count($this->collection->colections()));
    }

    /**
     * Get current element value 
     * 
     * @param void
     * @return string
     */
    public function current() : string
    {
        return $this->collection->colections()[$this->index];
    }

    /**
     * Move the pointer to the next element in array
     * 
     * @param void
     * @return void
     */
    public function next(): void
    {
        $this->index++;
    }
}