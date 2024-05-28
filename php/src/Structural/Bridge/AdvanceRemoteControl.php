<?php

namespace Imaarov\Patterns\Structural\Bridge;

use Imaarov\Patterns\Structural\Bridge\Interface\DeviceInterface;

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