<?php

namespace Imaarov\Patterns\Behavioral\Strategy\Interface;

interface CompressorInterface {
    public function compress(string $fileName);
}