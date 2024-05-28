<?php

namespace Imaarov\Patterns\Structural\Adapter;

use Imaarov\Patterns\Structural\Adapter\Adapter\ZarinpalAdapter;
use Imaarov\Patterns\Structural\Adapter\Gateway\CustomGateway;
use Imaarov\Patterns\Structural\Adapter\Gateway\ZarinpalGateway;

class Main {

    public function __construct()
    {
        # Set the local gateway
        $gatewayPay = new GatewayPay(new Gateway());
        $gatewayPay->pay(new CustomGateway());

        # Set the 3rd party library gateway
        $gatewayPayWithLib = new GatewayPay(new Gateway());
        $gatewayPayWithLib->pay(new ZarinpalAdapter(new ZarinpalGateway()));

    }
}