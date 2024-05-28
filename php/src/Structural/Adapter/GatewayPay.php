<?php

namespace Imaarov\Patterns\Structural\Adapter;

use Imaarov\Patterns\Structural\Adapter\Interface\GatewayInterface;

class GatewayPay {

    /**
     * Get a Gateway object
     */
    public function __construct(
        private Gateway $gateway
    )
    { }

    /**
     * Pay with the Gateway object(contain some global configuration for gateway) and the specific gateway
     * 
     * @param GatewayInterface $gatewayInterface
     * @return void
     */
    public function pay(GatewayInterface $gatewayInterface) : void
    {
        $gatewayInterface->pay($this->gateway);
    }
}