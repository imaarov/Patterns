<?php

namespace DesignPattern\Creational\Builder\Php\Interface;

use DesignPattern\Creational\Builder\Php\Slide;

interface PresentationBuilderInterface {
    public function addSlide(Slide $slide) : void;
}