<?php

namespace DesignPattern\Structural\Decorator\Php;

use DesignPattern\Structural\Decorator\Php\Interface\StreamInterface;

class Main {

    public function __construct()
    {
        $this->storeCreditCard(new EncryptedCloudStream(new CloudStream()));
    }

    static public function storeCreditCard(StreamInterface $stream)
    {
        $stream->write("12712812");
    }
}