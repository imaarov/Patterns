<?php

namespace Imaarov\Patterns\Behavioral\Command;

use Imaarov\Patterns\Behavioral\Command\Commands\Light;

class Main {

    public function __construct()
    {
        $light    = new Light();
        $command  = new AddLightCommand($light);
        $button   = new Button($command);
        $button->click();      
    }
}