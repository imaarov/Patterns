<?php

namespace DesignPattern\Creational\Factory\Php\Sender\Factory;

use DesignPattern\Creational\Factory\Php\Sender\Interface\SenderInterface;
use DesignPattern\Creational\Factory\Sender\Php\Factory\SenderAbstractFactory;
use DesignPattern\Creational\Factory\Sender\Php\SMSSender;

class SMSSenderFactory extends SenderAbstractFactory {
    public function getSenderObject() : SenderInterface
    {
        return new SMSSender();
    }
}