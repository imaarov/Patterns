<?php

namespace DesignPattern\Structural\Bridge\Php;

use DesignPattern\Structural\Bridge\Php\Interface\DeviceInterface;

class RemoteControl {

    public function __construct(
        protected DeviceInterface $deviceInterface
    )
    { }

    public function turnOn()
    {
        $this->deviceInterface->turnOn();
    }

    public function turnOff()
    {
        $this->deviceInterface->turnOff();
    }
}