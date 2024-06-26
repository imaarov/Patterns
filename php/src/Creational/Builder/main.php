<?php

namespace Imaarov\Patterns\Creational\Builder;


class Main{

    public function __construct()
    {
        $presentation = new Presentation();
        $presentation->addSlides(new Slide("Slide 1"));
        $presentation->addSlides(new Slide("Slide 2"));

        $builder = new PdfDocumentBuilder();
        $presentation->export($builder);
        $pdf = $builder->getPdfDocument();
    }
   
}