<?php

namespace DesignPattern\Behavioral\Strategy\Php\Interface;

interface CompressorInterface {
    public function compress(string $fileName);
}