<?php

namespace DesignPattern\Structural\Bridge\Php;

use DesignPattern\Structural\Bridge\Php\Interface\DeviceInterface;

class AdvanceRemoteControl extends RemoteControl {

    public function __construct(DeviceInterface $deviceInterface)
    {
        $this->deviceInterface = $deviceInterface;
    }

    public function setChannle(int $numner)
    {
        $this->deviceInterface->setChannle($numner);
    }
}