<?php

namespace DesignPattern\Creational\Builder\Php;

use DesignPattern\Creational\Builder\Php\Interface\PresentationBuilderInterface;

class MovieBuilder implements PresentationBuilderInterface{

    private $movie;

    public function __construct()
    {
        if(!isset($this->movie))
            $this->movie = new Movie();
    }

    public function addSlide(Slide $slide): void
    {
        $this->movie->addFrame($slide->getText(), 1);
    }

    public function getMovie()
    {
        return $this->movie;
    }
    
}