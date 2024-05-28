<?php

namespace Imaarov\Patterns\Structural\Decorator;

use Imaarov\Patterns\Structural\Decorator\Interface\StreamInterface;

class EncryptedCloudStream implements StreamInterface {

    public function __construct(
        private StreamInterface $streamInterface
    )
    { }

    public function write(string $data): void
    {
        $compressed = $this->encrypt($data);
        $this->streamInterface->write($compressed);
    }

    private function encrypt(string $data)
    {
        return "@##$#DWED@#@#";
    }
}