<?php

namespace DesignPattern\Structural\Decorator\Php;

use DesignPattern\Structural\Decorator\Php\Interface\StreamInterface;

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