<?php

namespace Imaarov\Patterns\Structural\Decorator;

use Imaarov\Patterns\Structural\Decorator\Interface\StreamInterface;

class CompressCloudStream implements StreamInterface {

    public function __construct(
        private StreamInterface $streamInterface
    )
    { }

    public function write(string $data): void
    {
        $encrypted = $this->compress($data);
        $this->streamInterface->write($encrypted);
    }

    private function compress(string $data)
    {
        return "compressed file";
    }
}