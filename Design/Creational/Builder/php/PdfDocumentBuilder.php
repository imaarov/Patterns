<?php

namespace DesignPattern\Creational\Builder\Php;

use DesignPattern\Creational\Builder\Php\Interface\PresentationBuilderInterface;

class PdfDocumentBuilder implements PresentationBuilderInterface{

    private $document;

    public function __construct()
    {
        if(!isset($this->document))
            $this->document = new PdfDocument();
    }

    public function addSlide(Slide $slide): void
    {
        $this->document->addPage($slide->getText());
    }

    public function getPdfDocument()
    {
        return $this->document;
    }
    
}