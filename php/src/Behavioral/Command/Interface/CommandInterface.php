<?php

namespace Imaarov\Patterns\Behavioral\Command\Interface;

/**
 * Command interface implemention
 */
interface CommandInterface {
    public function execute() : void;
    public function undo() : void;
}