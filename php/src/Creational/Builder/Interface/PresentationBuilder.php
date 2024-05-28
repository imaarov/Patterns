<?php

namespace Imaarov\Patterns\Creational\Builder\Interface;

use Imaarov\Patterns\Creational\Builder\Slide;

interface PresentationBuilderInterface {
    public function addSlide(Slide $slide) : void;
}