<?php

namespace Imaarov\Patterns\Behavioral\Command;

use Imaarov\Patterns\Behavioral\Command\Commands\Light;
use Imaarov\Patterns\Behavioral\Command\Interface\CommandInterface;

class AddLightCommand implements CommandInterface {

    public function __construct(
        private Light $lightCommand
    )
    { }

    /**
     * Execute Light Command for turning light up 
     * 
     * @return void 
     */
    public function execute(): void
    {
       $this->lightCommand->turnUpLight(); 
    }

    /**
     * Execute undo mechanism that is turning light off
     * 
     * @return void
     */
    public function undo(): void
    {
        $this->lightCommand->turnOffLight();
    }
}