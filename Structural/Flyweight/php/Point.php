<?php

namespace DesignPattern\Structural\Flyweight\Php;

use DesignPattern\Structural\Flyweight\Php\Enum\PointTypeEnum;

class Point {
    
    public function __construct(
        private int $x,
        private int $y,
        // private PointTypeEnum $pointType,
        // private array $icon
        private PointIcon $pointIcon
    )
    { }

    public function draw()
    {
        echo "Type: " . $this->pointIcon->getType() . ", x,y : " . $this->x . "," . $this->y;
    }
}