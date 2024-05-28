<?php

namespace Imaarov\Patterns\Structural\Bridge;

use Imaarov\Patterns\Structural\Bridge\Interface\DeviceInterface;

class SonyTV implements DeviceInterface {
    
    public function turnOff(): void
    {
        echo "\nSony Turn Off\n";
    }

    public function turnOn(): void
    {
        echo "\nSony Turn On\n";       
    }

    public function setChannle(int $numbr): void
    {
        echo "\nSony Set Channle\n";
    }

}