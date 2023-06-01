<?php

namespace DesignPattern\Behavioral\Command\Php;

use DesignPattern\Behavioral\Command\Php\Command\Light;

class Main {

    public function __construct()
    {
        $light    = new Light();
        $command  = new AddLightCommand($light);
        $button   = new Button($command);
        $button->click();      
    }
}