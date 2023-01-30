<?php

namespace DesignPattern\Creational\Builder\Php;

class Movie {
    
    public function addFrame(string $text, int $duration)
    {
        echo "\nadding a frame to movie\n";
    }
}