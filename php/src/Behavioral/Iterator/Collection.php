<?php


namespace Imaarov\Patterns\Behavioral\Iterator;

use Imaarov\Patterns\Behavioral\Iterator\Interface\IteratorInterface;
use Imaarov\Patterns\Behavioral\Iterator\Iterators\ArrayIterator;

class Collection {
    protected array $colection = [];

    /**
     * Return the Collection data structure (currently is array)
     * 
     * @return array|mixed
     */
    public function colections()
    {
        return $this->colection;
    }

    /**
     * Create Iterator BASE ON collection data structure
     * 
     * @return IteratorInterface
     */
    public function createIterator() : IteratorInterface {
        return new  ArrayIterator($this);       
    }
}