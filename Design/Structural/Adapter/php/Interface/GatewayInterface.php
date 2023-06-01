<?php

namespace DesignPattern\Structural\Adapter\Php\Interface;

use DesignPattern\Structural\Adapter\Php\Gateway;

interface GatewayInterface {
    public function pay(Gateway $gateway) : void;
}