<?php

namespace DesignPattern\Structural\Flyweight\Php;

use DesignPattern\Structural\Flyweight\Php\Enum\PointTypeEnum;

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