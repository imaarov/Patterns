<?php

namespace DesignPattern\Creational\Php;

class BrowserState {
    
    private string $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }

    public function getContent() {
        return $this->content;
    }
}