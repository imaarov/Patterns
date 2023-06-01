<?php

namespace DesignPattern\Structural\Flyweight\Php;

use DesignPattern\Structural\Flyweight\Php\Enum\PointTypeEnum;

class PointIconFactory {
    
    private array $icons = array();

    public function getPointIcon(PointTypeEnum $pointTypeEnum)
    {
        if(! isset($this->icons[$pointTypeEnum])) {
            $icon = new PointIcon($pointTypeEnum, []);
            $this->icons[$pointTypeEnum] = $icon;
        }

        return $this->icons[$pointTypeEnum];
    }
    
}