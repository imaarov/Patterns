<?php

namespace Imaarov\Patterns\Behavioral\Iterator\Iterators;

use Imaarov\Patterns\Behavioral\Iterator\Collection;
use Imaarov\Patterns\Behavioral\Iterator\Interface\IteratorInterface;

class ArrayIterator implements IteratorInterface {

    private int $index = 0;

    /**
     * Get Collection first for iterate it in ARRAY way
     * 
     * @return void
     */
    public function __construct(
        protected Collection $collection
    )
    { }

    /**
     * Return true if there any next element in this aray
     * 
     * @return bool
     */
    public function hasNext() : bool 
    {
        return ($this->index < count($this->collection->colections()));
    }

    /**
     * Get current element value 
     * 
     * @return string
     */
    public function current() : string
    {
        return $this->collection->colections()[$this->index];
    }

    /**
     * Move the pointer to the next element in array
     * 
     * @return void
     */
    public function next(): void
    {
        $this->index++;
    }
}