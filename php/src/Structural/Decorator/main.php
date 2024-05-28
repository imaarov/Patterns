<?php

namespace Imaarov\Patterns\Structural\Decorator;

use Imaarov\Patterns\Structural\Decorator\Interface\StreamInterface;

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