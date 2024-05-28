<?php

namespace Imaarov\Patterns\Creational\Builder;

use Imaarov\Patterns\Creational\Builder\Interface\PresentationBuilderInterface;

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