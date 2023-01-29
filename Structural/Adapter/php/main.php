<?php

namespace DesignPattern\Structural\Adapter\Php;

use DesignPattern\Structural\Adapter\Php\Adapter\ZarinpalAdapter;
use DesignPattern\Structural\Adapter\Php\Gateway\CustomGateway;
use DesignPattern\Structural\Adapter\Php\Gateway\ZarinpalGateway;

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