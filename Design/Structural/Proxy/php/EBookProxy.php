<?php

namespace DesignPattern\Structural\Proxy\Php;

use DesignPattern\Structural\Proxy\Php\Interface\EBookInterface;

class EBookProxy implements EBookInterface {

    private RealEBook $ebook;

    public function __construct(
        private string $fileName
    )
    { }

    public function show(): void
    {
        if($this->ebook == null) {
            $this->ebook = new RealEBook($this->fileName);
        }
        $this->ebook->show();
    }

    public function getFileName(): string
    {
        return "";
    }

}