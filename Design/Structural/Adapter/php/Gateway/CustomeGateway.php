<?php

namespace DesignPattern\Structural\Adapter\Php\Gateway;

use DesignPattern\Structural\Adapter\Php\Gateway;
use DesignPattern\Structural\Adapter\Php\Interface\GatewayInterface;

class CustomGateway implements GatewayInterface {

    /**
     * Custom gateway that created by me
     * 
     * @param Gateway $gateway
     * @return void
     */
    public function pay(Gateway $gateway): void
    {
        
    }
}