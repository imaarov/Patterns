<?php

namespace DesignPattern\Creational\Factory\Php\Sender;

use DesignPattern\Creational\Factory\Php\Sender\Factory\SMSSenderFactory;
use DesignPattern\Creational\Factory\Sender\Php\Factory\SenderAbstractFactory;

class send {
    public function __construct(
        private SenderAbstractFactory $senderAbstractFactory
    )
    { }

    public function send()
    {
        $this
            ->senderAbstractFactory
            ->sendToAll();
    }
}


function test() 
{
    $smsSendObj = new send(new SMSSenderFactory());
    $smsSendObj->send();
}