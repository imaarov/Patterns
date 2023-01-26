<?php

namespace DesignPattern\Behavioral\Strategy\Php\Compressor;

use DesignPattern\Behavioral\Strategy\Php\Interface\CompressorInterface;

class PngCompressor implements CompressorInterface {

    /**
     * Comperess image in png way
     * 
     * @param string $fileName
     * @return void
     */
    public function compress(string $fileName) : void
    {
        echo "\nCompress with Png way\n";
    }
}