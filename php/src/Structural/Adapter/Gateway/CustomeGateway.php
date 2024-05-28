<?php

namespace Imaarov\Patterns\Structural\Adapter\Gateway;

use Imaarov\Patterns\Structural\Adapter\Gateway;
use Imaarov\Patterns\Structural\Adapter\Interface\GatewayInterface;

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