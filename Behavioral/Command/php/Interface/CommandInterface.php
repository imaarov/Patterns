<?php

namespace DesignPattern\Behavioral\Command\Php\Interface;

interface CommandInterface {
    public function execute() : void;
    public function undo() : void;
}