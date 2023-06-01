<?php

namespace DesignPattern\Behavioral\TemplateMethod\Php;

use DesignPattern\Behavioral\TemplateMethod\Php\Abstract\MinerAbstract;

class FileReader {
    
    /**
     * Get Miner object and file name
     */
    public function __construct(
        protected MinerAbstract $minerAbstract,
        protected string $fileName
    )
    { }

    /**
     * Mining from file (whatever the given object its be , mining gonna start that way)
     * 
     * @param void
     * @return void
     */
    public function startMine()
    {
        $this
            ->minerAbstract
            ->template($this->fileName);
    }
}