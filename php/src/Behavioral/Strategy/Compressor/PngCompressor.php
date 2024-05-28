<?php

namespace Imaarov\Patterns\Behavioral\Strategy\Compressor;

use Imaarov\Patterns\Behavioral\Strategy\Interface\CompressorInterface;

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