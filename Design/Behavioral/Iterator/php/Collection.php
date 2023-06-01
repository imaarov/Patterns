<?php


namespace DesignPattern\Behavioral\Iterator\Php;

use DesignPattern\Behavioral\Iterator\Php\Interface\IteratorInterface;
use DesignPattern\Behavioral\Iterator\Php\Iterator\ArrayIterator;

class Collection {
    protected array $colection = [];

    /**
     * Return the Collection data structure (currently is array)
     * 
     * @param void
     * @return array|mixed
     */
    public function colections()
    {
        return $this->colection;
    }

    /**
     * Create Iterator BASE ON collection data structure
     * 
     * @param void
     * @return IteratorInterface
     */
    public function createIterator() : IteratorInterface {
        return new  ArrayIterator($this);       
    }
}