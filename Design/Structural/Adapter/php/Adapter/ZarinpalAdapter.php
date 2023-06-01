<?php

namespace DesignPattern\Structural\Adapter\Php\Adapter;

use DesignPattern\Structural\Adapter\Php\Gateway;
use DesignPattern\Structural\Adapter\Php\Gateway\ZarinpalGateway;
use DesignPattern\Structural\Adapter\Php\Interface\GatewayInterface;

class ZarinpalAdapter implements GatewayInterface {

    /**
     * Get ZarinpalGateway (3rd party library) that we want to change it interface
     */
    public function __construct(
        private ZarinpalGateway $zarinpalGateway
    )
    { }

    /**
     * Process the library with its own way
     * 
     * @param Gateway $gateway
     * @return void
     */
    public function pay(Gateway $gateway): void
    {
       $this->zarinpalGateway->requireLibraryConfig();
       $this->zarinpalGateway->pay($gateway); 
    }
}