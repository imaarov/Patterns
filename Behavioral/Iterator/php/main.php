<?php

namespace DesignPattern\Behavioral\Iterator\Php;

class Main {

    /**
     * Iterate through the collection without knowing the data structure of that
     * 
     * @param void
     * @return void
     */
    public function action()
    {
        $colection = new Collection();
        $iterator = $colection->createIterator();
        while ($iterator->hasNext()) {
            $el = $iterator->current();
            echo PHP_EOL . $el . PHP_EOL;
            $iterator->next();
        } 
    }
}