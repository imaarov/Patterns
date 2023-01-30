<?php

namespace DesignPattern\Creational\Builder\Php;

class PdfDocument {

    public function addPage(string $text)
    {
        echo "\nadding a page to pdf\n";
    }
}