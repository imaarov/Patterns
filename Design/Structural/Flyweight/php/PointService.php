<?php

namespace DesignPattern\Structural\Flyweight\Php;

use DesignPattern\Structural\Flyweight\Php;
use DesignPattern\Structural\Flyweight\Php\Enum\PointTypeEnum;

class PointService {

    public function __construct(
        private PointIconFactory $pointIconFactory
    )
    { }
    
    public function getPoints() : array
    {
        $points = array();
        $point = new Point(1, 2, $this->pointIconFactory->getPointIcon(PointTypeEnum::COFFE));
        array_push($points, $point);

        return $points;
    }
}