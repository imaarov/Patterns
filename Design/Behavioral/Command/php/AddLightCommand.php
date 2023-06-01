<?php

namespace DesignPattern\Behavioral\Command\Php;

use DesignPattern\Behavioral\Command\Php\Command\Light;
use DesignPattern\Behavioral\Command\Php\Interface\CommandInterface;

class AddLightCommand implements CommandInterface {

    public function __construct(
        private Light $lightCommand
    )
    { }

    /**
     * Execute Light Command for turning light up 
     * 
     * @param void
     * @return void 
     */
    public function execute(): void
    {
       $this->lightCommand->turnUpLight(); 
    }

    /**
     * Execute undo mechanism that is turning light off
     * 
     * @param void
     * @return void
     */
    public function undo(): void
    {
        $this->lightCommand->turnOffLight();
    }
}