<?php

namespace Imaarov\Patterns\Behavioral\Command;

use Imaarov\Patterns\Behavioral\Command\Commands\Light;
use Imaarov\Patterns\Behavioral\Command\Interface\CommandInterface;

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