<?php

namespace Imaarov\Patterns\Creational\Builder;

class PdfDocument {

    public function addPage(string $text)
    {
        echo "\nadding a page to pdf\n";
    }
}