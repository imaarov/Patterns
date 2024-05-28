<?php

namespace Imaarov\Patterns\Structural\Bridge;

use Imaarov\Patterns\Structural\Bridge\Interface\DeviceInterface;

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