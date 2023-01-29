<?php

namespace DesignPattern\Structural\Flyweight\Php;


class Main {
    
    public function __construct()
    {
        $service = new PointService(new PointIconFactory());
        foreach ($service->getPoints() as $key => $point) {
            $point->draw();
        }
    }
    
}