<?php

namespace Imaarov\Patterns\Structural\Decorator\Interface;

interface StreamInterface {
    public function write(string $data);
}