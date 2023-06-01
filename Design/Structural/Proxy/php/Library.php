<?php

namespace DesignPattern\Structural\Proxy\Php;

use DesignPattern\Structural\Proxy\Php\Interface\EBookInterface;

class Library {
    private array $ebooks;
    
    public function add(EBookInterface $eBook) : void
    {
        $this->ebooks[$eBook->getFileName()] = $eBook;
    }

    public function openEbook(string $fileName)
    {
        if(isset($this->ebooks[$fileName]))
            $this->ebooks[$fileName]->show();
    }
}