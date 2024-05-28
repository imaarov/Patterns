<?php

namespace DesignPattern\Creational\Factory\Sender\Php\Factory;

use DesignPattern\Creational\Factory\Php\Sender\Interface\SenderInterface;

abstract class SenderAbstractFactory {

    private array $receiversList = array();
    abstract function getSenderObject() : SenderInterface;

    public function sendToAll()
    {
        $sender = $this->getSenderObject();
        $this->receiversList = $sender->getReceiversList();

        foreach ($this->receiversList as $key => $receiver) {
            $sender->send($receiver);
            $sender->submitDb($receiver);
        }
    }
}