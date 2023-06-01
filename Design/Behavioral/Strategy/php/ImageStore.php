<?php

namespace DesignPattern\Behavioral\Strategy\Php;

use DesignPattern\Behavioral\Strategy\Php\Interface\CompressorInterface;
use DesignPattern\Behavioral\Strategy\Php\Interface\FilterInterface;

class ImageStore {

    /**
     * Get the user selected Compress and filter  
     */
    public function __construct(
        private CompressorInterface $compressor,
        private FilterInterface $filter
    )
    { }

    /**
     * Store image base on entries of constructor method for right filter and compress
     * 
     * @param string $fileName
     * @return void 
     */
    public function store(string $fileName) : void
    {
        $this->compressor->compress($fileName);
        $this->filter->apply($fileName);
    }
}