<?php

namespace Imaarov\Patterns\Structural\Flyweight;

use Imaarov\Patterns\Structural\Flyweight\Enum\PointTypeEnum;

class PointIcon {

    public function __construct(
        private PointTypeEnum $pointType,
        private array $icon
    )
    { }

    public function getType()
    {
        return $this->pointType;
    }
    
}