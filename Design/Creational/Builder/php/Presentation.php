<?php

namespace DesignPattern\Creational\Builder\Php;

use DesignPattern\Creational\Builder\Php\Enum\PresentationFormatEnum;
use DesignPattern\Creational\Builder\Php\Interface\PresentationBuilderInterface;

class Presentation {

    private array $slides;

    public function addSlides(Slide $slide)
    {
        array_push($this->slides, $slide);
    }

    public function export(PresentationBuilderInterface $builder) : void
    {
        # instead of this
        // if($presentationFormatEnum == PresentationFormatEnum::PDF) {
        //     $pdf = new PdfDocument();
        //     foreach ($this->slides as $key => $slide) {
        //         $pdf->addPage($slide->getText());
        //     }
        // }else if($presentationFormatEnum == PresentationFormatEnum::MOVIE) {
        //     $movie = new Movie();
        //     foreach ($this->slides as $key => $slide) {
        //         $movie->addFrame($slide->getText(), 1);
        //     }
        // }

        # use Factory
        $builder->addSlide(new Slide("copyright"));
        foreach ($this->slides as $key => $slide) {
            $builder->addSlide($slide);
        }
    }
}