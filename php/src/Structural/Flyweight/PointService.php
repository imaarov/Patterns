<?php

namespace Imaarov\Patterns\Structural\Flyweight;

use Imaarov\Patterns\Structural\Flyweight\Enum\PointTypeEnum;

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