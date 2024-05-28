<?php

namespace Imaarov\Patterns\Structural\Adapter\Interface;

use Imaarov\Patterns\Structural\Adapter\Gateway;

interface GatewayInterface {
    public function pay(Gateway $gateway) : void;
}