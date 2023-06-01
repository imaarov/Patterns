<?php

namespace DesignPattern\Behavioral\Command\Php;

use DesignPattern\Behavioral\Command\Php\Command\Light;
use DesignPattern\Behavioral\Command\Php\Interface\CommandInterface;

class Button {
    public function __construct(
        private CommandInterface $commandInterface
    )
    { }

    public function click()
    {
        $this->commandInterface->execute();
    }
}