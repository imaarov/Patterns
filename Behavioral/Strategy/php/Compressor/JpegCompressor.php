<?php

namespace DesignPattern\Behavioral\Strategy\Php\Compressor;

use DesignPattern\Behavioral\Strategy\Php\Interface\CompressorInterface;

class JpegCompressor implements CompressorInterface {
    
    /**
     * Compress image in jpeg way
     * 
     * @param string $fileName
     * @return void
     */
    public function compress(string $fileName) : void
    {
        echo "\nCompress with Jpeg way\n";
    }
}