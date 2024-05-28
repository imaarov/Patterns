<?php

namespace Imaarov\Patterns\Structural\Proxy;

use Imaarov\Patterns\Structural\Proxy\Interface\EBookInterface;

class RealEBook implements EBookInterface {

    public function __construct(
        private string $fileName
    )
    {
        $this->load();
    }

    public function getFileName() : string
    {
        return $this->fileName;
    }

    public function load() : void
    {
        echo "\n loading the ebook" . $this->fileName;
    }

    public function show() : void
    {
        echo "\n Showing the EBook \n";
    }
}