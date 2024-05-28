<?php

namespace Imaarov\Patterns\Behavioral\TemplateMethod;

use Imaarov\Patterns\Behavioral\TemplateMethod\Abstract\MinerAbstract;

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
     * @return void
     */
    public function startMine()
    {
        $this
            ->minerAbstract
            ->template($this->fileName);
    }
}