<?php

namespace Imaarov\Patterns\Creational\Builder;

class Movie {
    
    public function addFrame(string $text, int $duration)
    {
        echo "\nadding a frame to movie\n";
    }
}