<?php

namespace DesignPattern\Structural\Bridge\Php\Interface;

interface DeviceInterface {
    public function turnOn() : void;
    public function turnOff() : void;
    public function setChannle(int $numbr) : void;
}